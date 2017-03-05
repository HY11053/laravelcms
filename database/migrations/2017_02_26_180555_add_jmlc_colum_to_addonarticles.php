<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddJmlcColumToAddonarticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('addonarticles', function (Blueprint $table) {
            //
            $table->text('jmxq_content');
            $table->text('jmys_content');
            $table->text('jmlc_content');
            $table->text('jmzc_content');
            $table->text('jmask_content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('addonarticles', function (Blueprint $table) {
            //
            $table->dropColumn(['jmxq_content','jmys_content','jmlc_content','jmzc_content','jmask_content']);
        });
    }
}
