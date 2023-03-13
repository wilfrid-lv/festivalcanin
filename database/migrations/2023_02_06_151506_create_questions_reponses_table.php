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

        DB::table('QuestionsReponses')->insert(
            array(
                'question' => 'Qu\'est-ce que la formation de chien?',
                'reponse' => 'La formation de chien est un service qui consiste à former votre chien à des exercices physiques et mentaux. Il s\'agit d\'un service qui est offert par des professionnels qui ont l\'expérience et les connaissances nécessaires pour former votre chien.'
            )
        );

        DB::table('QuestionsReponses')->insert(
            array(
                'question' => 'Qu\'est-ce qu\'un chien?',
                'reponse' => 'Un chien est un animal domestique qui est considéré comme un membre de la famille. Il s\'agit d\'un animal qui est très affectueux et qui est très attaché à son maître.'
            )
        );

        DB::table('QuestionsReponses')->insert(
            array(
                'question' => 'Qu\'est-ce qu\'un festival?',
                'reponse' => 'Un festival est un événement qui est organisé pour célébrer un événement particulier. Il s\'agit d\'un événement qui est très populaire et qui est très apprécié par les gens.'
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
