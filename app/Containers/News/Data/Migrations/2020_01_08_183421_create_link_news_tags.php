<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinkNewsTags extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('news_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('news_id');
            $table->integer('rubric_id');
            $table->timestamps();
            //$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('news_tags');
    }
}
