<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotsClesArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MotsClesArticles', function (Blueprint $table) {
            $table->id();
            $table->foreign('motcle_id')->references('id')->on('MotsCles');
            $table->foreign('article_id')->references('id')->on('Articles');
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
        Schema::dropIfExists('MotsClesArticles');
    }
}
