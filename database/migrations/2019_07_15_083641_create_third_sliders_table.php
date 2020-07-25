<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThirdSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('third_sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('main_name')->nullable();
            $table->string('second_name')->nullable();
            $table->string('slider_img')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('third_sliders');
    }
}
