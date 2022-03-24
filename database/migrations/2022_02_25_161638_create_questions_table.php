<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->unsignedBigInteger('cat_id')->comment('猫のid');
            $table->foreign('cat_id')->references('id')->on('cats');
            $table->unsignedBigInteger('user_id')->comment('ユーザ-id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('question');
            $table->string('reply')->nullable();
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
        Schema::dropIfExists('questions');
    }
}
