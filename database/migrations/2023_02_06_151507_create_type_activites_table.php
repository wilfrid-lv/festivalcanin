<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeActivitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TypeActivites', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('imagePath')->nullable();
            $table->timestamps();
        });

        //ajouter type sport canin
        DB::table('TypeActivites')->insert(
            array(
                'nom' => 'Compétition',
                'imagePath' => '/images/activites/competition.jpg'
            )
        );

        //ajouter type conference
        DB::table('TypeActivites')->insert(
            array(
                'nom' => 'Conférence',
                'imagePath' => '/images/activites/conference.png'
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
        Schema::dropIfExists('TypeActivites');
    }
}
