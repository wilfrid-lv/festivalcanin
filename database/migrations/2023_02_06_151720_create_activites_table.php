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
            //$table->string('imagePath')->nullable();
            $table->string('lienInscription')->nullable();
            $table->dateTime('dateHeure');
            $table->foreignId('typeActivite_id')->constrained('TypeActivites');
            $table->timestamps();
        });


        //ajouter activite sport canin a 9h
        DB::table('Activites')->insert(
            array(
                'titre' => 'Rattrapage de moutons',
                'description' => 'Les chiens entrent en compétition pour savoir qui sera capable de ramener les moutons en un court laps de temps',
                //'imagePath' => '/images/activites/sportcanin.png',
                'lienInscription' => 'https://www.facebook.com/lionsdegelis/',
                'dateHeure' => '2021-02-06 09:00:00',
                'typeActivite_id' => 1
            )
        );

        //ajouter conference sur les chiens de chasse a 10h
        DB::table('Activites')->insert(
            array(
                'titre' => 'Chiens de chasse',
                'description' => 'Paul Piché raconte l\'importance historique des chiens de chasse',
                //'lienInscription' => 'https://www.facebook.com/lionsdegelis/',
                'dateHeure' => '2021-02-06 10:00:00',
                'typeActivite_id' => 2
            )
        );

        //ajouter activite sport canin a 11h, les chiens cherchent des oeufs de pâques
        DB::table('Activites')->insert(
            array(
                'titre' => 'Chasse aux oeufs',
                'description' => 'Les chiens entrent en compétition pour savoir qui sera capable de ramener le plus d\'oeufs en un court laps de temps',
                'lienInscription' => 'https://www.facebook.com/lionsdegelis/',
                'dateHeure' => '2021-02-06 11:00:00',
                'typeActivite_id' => 1
            )
        );

        //ajouter competition sport ratier
        DB::table('Activites')->insert(
            array(
                'titre' => 'Rattrapage de rats',
                'description' => 'Les chiens entrent en compétition pour savoir qui sera capable de ramener les rats en un court laps de temps',
                'lienInscription' => 'https://www.facebook.com/lionsdegelis/',
                'dateHeure' => '2021-02-06 12:00:00',
                'typeActivite_id' => 1
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
