<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToTutorInfosTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tutor_infos', function (Blueprint $table) {

            $table->string('parents_phone_number')->nullable();
            $table->string('is_premium')->nullable()->default('0');
            $table->string('experience_years')->nullable();
            $table->string('experience_subjects')->nullable();
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
            
            $table->dropColumn('parents_phone_number');
            $table->dropColumn('is_premium');
            $table->dropColumn('experience_years');
            $table->dropColumn('experience_subjects');

        });
    }
}
