<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Informations', function (Blueprint $table) {
            $table->id();
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->text('description');
            $table->text('descriptionLocalisation');
            $table->string('noTelephoneContact');
            $table->string('lieu');
            $table->string('courrielContact');
            $table->string('resume');
            $table->string('adresse');
            $table->string('imageAccueil');
            $table->string('lienVideo');
            $table->timestamps();
        });

        DB::table('Informations')->insert(
            array(
                //date debut 27 aout 2023
                'dateDebut' => '2023-08-26',
                'dateFin' => '2023-08-27',
                'description' => 'Le Festival Canin est un festival comportant plusieurs chiens',
                'noTelephoneContact' => '418-750-2816',
                'courrielContact' => 'courrielcontact@gmail.com',
                'resume' => 'voici un court résumé comportant plusieurs chiens',
                'adresse' => '515, de la Briquette, Dégelis, QC, Canada',
                'imageAccueil' => 'imageAccueil',
                'lienVideo' => 'lienVideo'
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
        Schema::dropIfExists('Informations');
    }
}
