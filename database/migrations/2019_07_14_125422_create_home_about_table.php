<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_about', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('title1')->nullable();
            $table->longText('detail1')->nullable();
            $table->string('title2')->nullable();
            $table->longText('detail2')->nullable();
            $table->string('title3')->nullable();
            $table->longText('detail3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_about');
    }
}
