<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->unsignedBigInteger('user_id')->comment('ユーザ-id')->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('cat_id')->comment('catテーブルのid');
            $table->string('name');
            $table->string('telephone')->comment('電話番号');
            $table->string('memo')->comment('備考');
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
        Schema::dropIfExists('forms');
    }
}
