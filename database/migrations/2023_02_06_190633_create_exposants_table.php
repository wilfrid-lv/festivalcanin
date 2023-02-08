<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExposantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Exposants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('pathImage');
            $table->string('lien');
            $table->text('description');
            $table->foreignId('utilisateur_id')->constrained('Utilisateurs');
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
        Schema::dropIfExists('Exposants');
    }
}
