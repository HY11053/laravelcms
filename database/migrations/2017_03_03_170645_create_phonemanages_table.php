<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonemanagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phonemanages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phoneno');
            $table->string('name');
            $table->string('gender');
            $table->string('address');
            $table->ipAddress('ip');
            $table->string('note');
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
        Schema::dropIfExists('phonemanages');
    }
}
