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
            $table->foreignId('niveau_id')->constrained('Niveaux');
            $table->timestamps();
        });


        //insert 4 times using for loop
        DB::table('Partenaires')->insert(
            array(
                'nom' => 'MRC de Témiscouata',
                'imagePath' => '/images/partenaires/mrctemis.jpg',
                'lien' => 'https://mail.mrctemiscouata.qc.ca/accueil',
                'niveau_id' => 1
            )
        );

        DB::table('Partenaires')->insert(
            array(
                'nom' => 'Club Lion',
                'imagePath' => '/images/partenaires/clublion.png',
                'lien' => 'https://www.facebook.com/lionsdegelis/',
                'niveau_id' => 1
            )
        );

        DB::table('Partenaires')->insert(
            array(
                'nom' => 'Ville de Dégelis',
                'imagePath' => '/images/partenaires/degelis.png',
                'lien' => 'https://degelis.ca/',
                'niveau_id' => 1
            )
        );

        //inserer Boudha Équipement
        DB::table('Partenaires')->insert(
            array(
                'nom' => 'Boudha Équipement',
                'imagePath' => '/images/partenaires/boudhaequipement.png',
                'lien' => 'https://www.facebook.com/boudhaequipement/',
                'niveau_id' => 1
            )
        );

        //groupe gds
        DB::table('Partenaires')->insert(
            array(
                'nom' => 'Groupe GDS',
                'imagePath' => '/images/partenaires/groupegds.png',
                'lien' => 'https://www.groupegds.com/',
                'niveau_id' => 2
            )
        );

        DB::table('Partenaires')->insert(
            array(
                'nom' => 'Groupe Lebel',
                'imagePath' => '/images/partenaires/groupelebel.png',
                'lien' => 'https://groupelebel.com/',
                'niveau_id' => 2
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
