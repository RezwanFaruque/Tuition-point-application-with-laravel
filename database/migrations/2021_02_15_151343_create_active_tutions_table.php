<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActiveTutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('active_tutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tutor_id');
            $table->string('full_name');
            $table->string('student_gender');
            $table->string('class');
            $table->string('days_per_week');
            $table->string('address');
            $table->string('phone_number')->nullable();
            $table->string('location')->nullable();
            $table->string('desire_tutor_gender')->nullable();
            $table->string('subjects')->nullable();
            $table->string('salary_range')->nullable();
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
        Schema::dropIfExists('active_tutions');
    }
}
