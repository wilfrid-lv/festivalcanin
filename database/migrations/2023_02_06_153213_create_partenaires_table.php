<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartenairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Partenaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('imagePath');
            $table->string('lien');
            $table->string('niveau');
            $table->timestamps();
        });

        DB::table('Partenaires')->insert(
            array(
                'nom' => 'Club Lion',
                'imagePath' => '/images/partenaires/clublion.png',
                'lien' => 'https://www.facebook.com/lionsdegelis/',
                'niveau' => 'Or'
            )
        );

        DB::table('Partenaires')->insert(
            array(
                'nom' => 'MRC de Témiscouata',
                'imagePath' => '/images/partenaires/mrctemis.jpg',
                'lien' => 'https://mail.mrctemiscouata.qc.ca/accueil',
                'niveau' => 'Or'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Partenaires');
    }
}
