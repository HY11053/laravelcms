<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archives', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('typeid');
            $table->integer('channelid');
            $table->integer('ismake');
            $table->integer('click');
            $table->integer('weight');
            $table->string('title');
            $table->string('shortitle');
            $table->string('keywords');
            $table->string('description');
            $table->string('write');
            $table->string('litpic');
            $table->smallInteger('dutyadmin');
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
        Schema::drop('archives');
    }
}
