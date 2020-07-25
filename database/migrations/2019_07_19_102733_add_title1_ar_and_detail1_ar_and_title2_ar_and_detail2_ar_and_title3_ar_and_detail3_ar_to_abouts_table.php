<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTitle1ArAndDetail1ArAndTitle2ArAndDetail2ArAndTitle3ArAndDetail3ArToAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->string('title1_ar')->nullable();
            $table->longText('detail1_ar')->nullable();
            $table->string('title2_ar')->nullable();
            $table->longText('detail2_ar')->nullable();
            $table->string('title3_ar')->nullable();
            $table->longText('detail3_ar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abouts', function (Blueprint $table) {
            //
        });
    }
}
