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