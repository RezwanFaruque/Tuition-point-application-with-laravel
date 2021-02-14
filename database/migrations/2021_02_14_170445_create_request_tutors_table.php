<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_tutors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name')->nullable();
            $table->string('district')->nullable();
            $table->string('area')->nullable();
            $table->string('school_or_collage')->nullable();
            $table->string('medium_or_category')->nullable();
            $table->string('class_or_grade')->nullable();
            $table->string('desire_tutor_gender')->nullable();
            $table->string('salary_range')->nullable();
            $table->string('additional_information')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('request_tutors');
    }
}
