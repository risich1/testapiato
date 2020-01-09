<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->integer('image')->nullable();
            $table->integer('rubric_id');
            $table->boolean('isBanComment')->default(false);
            $table->boolean('hasDatePublish')->default(false);
            $table->json('hasAccess')->nullable();
            $table->integer('status');
            $table->timestamps();
            //$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
