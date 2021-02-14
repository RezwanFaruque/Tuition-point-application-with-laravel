<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('university_or_collage')->nullable();
            $table->string('area')->nullable();
            $table->string('subject')->nullable();
            $table->string('medium')->nullable();
            $table->string('days_per_week')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('gender')->nullable();
            $table->string('h_school_name')->nullable();
            $table->string('h_school_result')->nullable();
            $table->string('h_passing_year')->nullable();
            $table->string('collage_name')->nullable();
            $table->string('collage_result')->nullable();
            $table->string('collage_passing_year')->nullable();            
            $table->string('university_name')->nullable();
            $table->string('university_result')->nullable();            
            $table->string('university_passing_year')->nullable();                     
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
        Schema::dropIfExists('tutor_infos');
    }
}
