<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::create('Utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('motdepasse');
            $table->string('nom')->nullable();
            $table->text('description')->nullable();
            $table->string('imagePath')->nullable();
            $table->string('adresse')->nullable();
            $table->string('ville')->nullable();
            $table->foreignId('role_id')->constrained('Roles');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('Utilisateurs')->insert(
            array(
                'nom' => 'admin',
                'email' => 'administrateur@courriel.com',
                'motdepasse' => 'admin',
                'role_id' => 1
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
        Schema::dropIfExists('Utilisateurs');
    }
}
