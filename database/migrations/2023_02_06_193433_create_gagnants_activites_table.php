<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGagnantsActivitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GagnantsActivites', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('position');
            $table->string('imagePath');
            $table->foreignId('activite_id')->constrained('Activites');
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
        Schema::dropIfExists('GagnantsActivites');
    }
}
