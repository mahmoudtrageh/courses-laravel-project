<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('c_name')->nullable();
            $table->string('ins_name')->nullable();
            $table->string('course_img')->nullable();
            $table->string('start')->nullable();
            $table->string('end')->nullable();
            $table->string('value')->nullable();
            $table->string('registers_n')->nullable();
            $table->longText('detail')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
