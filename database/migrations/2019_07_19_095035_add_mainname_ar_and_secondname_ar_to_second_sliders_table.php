<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMainnameArAndSecondnameArToSecondSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('second_sliders', function (Blueprint $table) {
            $table->string('mainname_ar')->nullable();
            $table->string('secondname_ar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('second_sliders', function (Blueprint $table) {
            //
        });
    }
}
