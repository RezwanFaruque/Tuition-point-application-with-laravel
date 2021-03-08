<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToRequestTutors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('request_tutors', function (Blueprint $table) {
            $table->string('desire_student_gender')->nullable();
            $table->string('days_per_week')->nullable();
            $table->string('subject')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('request_tutors', function (Blueprint $table) {
            $table->dropColumn('desire_student_gender');
            $table->dropColumn('days_per_week');
            $table->dropColumn('subject');

        });
    }
}
