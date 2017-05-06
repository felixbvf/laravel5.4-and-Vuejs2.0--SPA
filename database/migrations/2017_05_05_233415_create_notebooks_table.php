<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotebooksTable extends Migration
{
    public function up()
    {
        Schema::create('notebooks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('body');
            $table->bigInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }


    public function down()
    {
        Schema::dropIfExists('notebooks');
    }
}
