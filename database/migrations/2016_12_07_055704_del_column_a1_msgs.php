<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DelColumnA1Msgs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('msgs', function (Blueprint $table) {
            //
            $table->dropColumn('a1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('msgs', function (Blueprint $table) {
            //
            $table->integer('a1');
        });
    }
}
