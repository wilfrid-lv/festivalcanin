<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Activites', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->string('imagePath');
            $table->string('lienInscription');
            $table->dateTime('dateHeure');
            $table->foreignId('typeActivite_id')->constrained('TypeActivites');
            $table->timestamps();
        });

        //ajouter une autre activite de natation a 10h35
        DB::table('Activites')->insert(
            array(
                'titre' => 'Cours de natation',
                'description' => 'Cours de natation pour les enfants de 3 à 12 ans',
                'imagePath' => '/images/activites/coursnatation.jpg',
                'lienInscription' => 'https://www.facebook.com/lionsdegelis/',
                'dateHeure' => '2021-09-26 10:35:00',
                'typeActivite_id' => 1
            )
        );

        DB::table('Activites')->insert(
            array(
                'titre' => 'Cours de natation',
                'description' => 'Cours de natation pour les enfants de 3 à 12 ans',
                'imagePath' => '/images/activites/coursnatation.jpg',
                'lienInscription' => 'https://www.facebook.com/lionsdegelis/',
                'dateHeure' => '2021-09-26 15:00:00',
                'typeActivite_id' => 1
            )
        );

        DB::table('Activites')->insert(
            array(
                'titre' => 'Cours de danse',
                'description' => 'Cours de danse pour les enfants de 3 à 12 ans',
                'imagePath' => '/images/activites/coursdanse.jpg',
                'lienInscription' => 'https://www.facebook.com/lionsdegelis/',
                'dateHeure' => '2021-09-26 13:40:00',
                'typeActivite_id' => 2
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
        Schema::dropIfExists('Activites');
    }
}
