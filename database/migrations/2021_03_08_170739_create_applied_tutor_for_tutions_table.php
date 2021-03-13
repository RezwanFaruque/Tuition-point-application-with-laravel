<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppliedTutorForTutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applied_tutor_for_tutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('university')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('tutor_id')->nullable();
            $table->string('area')->nullable();
            $table->bigInteger('active_tution_post_id')->unsigned();
            $table->foreign('active_tution_post_id')->references('id')->on('active_tutions')->onDelete('cascade');
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
        Schema::dropIfExists('applied_tutor_for_tutions');
    }
}
