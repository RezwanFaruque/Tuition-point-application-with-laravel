<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSalaryRangeToTutorInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tutor_infos', function (Blueprint $table) {

            $table->string('salar_range_from')->nullable();
            $table->string('salary_range_to')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tutor_infos', function (Blueprint $table) {

            $table->dropColumn('salar_range_from');
            $table->dropColumn('salary_range_to');


        });
    }
}
