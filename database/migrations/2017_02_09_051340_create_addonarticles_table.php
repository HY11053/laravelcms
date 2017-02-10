<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddonarticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addonarticles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('typeid');
            $table->text('body');
            $table->string('pics');
            $table->string('redirect');
            $table->string('tag');
            $table->string('coordinate');
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
        Schema::drop('addonarticles');
    }
}
