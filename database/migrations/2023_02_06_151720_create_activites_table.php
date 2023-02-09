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
            $table->datetime('dateHeure');
            $table->foreignId('typeActivite_id')->constrained('TypeActivites');
            $table->timestamps();
        });

        DB::table(('Activites'))->insert(
            array(
                'titre' => 'Une activite agreable',
                'description' => 'Ceci est une activité agréable',
                'imagePath' => 'chepo',
                'lienInscription' => 'https://news.pistacherigolo.com',
                'dateHeure' => '2022-02-20 18:45:23',
                'typeActivite_id' => '1'
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
