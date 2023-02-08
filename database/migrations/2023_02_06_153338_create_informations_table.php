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
            $table->string('resume');
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
                'resume' => 'voici un court résumé comportant plusieurs chiens',
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
