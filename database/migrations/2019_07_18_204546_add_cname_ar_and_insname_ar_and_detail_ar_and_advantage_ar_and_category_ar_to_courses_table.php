<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCnameArAndInsnameArAndDetailArAndAdvantageArAndCategoryArToCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('cname_ar')->nullable();
            $table->string('insname_ar')->nullable();
            $table->longText('detail_ar')->nullable();
            $table->longText('advantage_ar')->nullable();
            $table->string('category_ar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            //
        });
    }
}
