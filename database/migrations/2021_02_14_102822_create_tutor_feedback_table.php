<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_feedback', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tutor_id')->unsigned();
            $table->foreign('tutor_id')->references('id')->on('tutor_infos')->onDelate('cascade');
            $table->string('rating')->nullable();
            $table->string('feedback_message')->nullable();
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
        Schema::dropIfExists('tutor_feedback'); 
    }
}
