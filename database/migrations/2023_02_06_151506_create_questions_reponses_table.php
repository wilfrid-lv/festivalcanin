<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsReponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('QuestionsReponses', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->text('reponse');
            $table->timestamps();
        });

        DB::table('QuestionsReponses')->insert(
            array(
                'question' => 'Qu\'est-ce que le sport canin?',
                'reponse' => 'Le sport canin est un sport qui consiste à faire exécuter à un chien des exercices physiques et mentaux, dans le but de le faire progresser et de le faire évoluer. Il existe plusieurs disciplines de sport canin, chacune avec ses propres règles et ses propres objectifs.'
            )
        );

        //garderie pour chien
        DB::table('QuestionsReponses')->insert(
            array(
                'question' => 'Qu\'est-ce que la garderie pour chien?',
                'reponse' => 'La garderie pour chien est un service qui consiste à garder votre chien pendant une période de temps déterminée. Il s\'agit d\'un service qui est offert par des professionnels qui ont l\'expérience et les connaissances nécessaires pour s\'occuper de votre chien.'
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
        Schema::dropIfExists('QuestionsReponses');
    }
}
