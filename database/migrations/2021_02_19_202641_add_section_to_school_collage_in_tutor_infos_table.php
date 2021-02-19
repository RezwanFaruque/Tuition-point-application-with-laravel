<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSectionToSchoolCollageInTutorInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tutor_infos', function (Blueprint $table) {
            $table->string('h_school_section')->nullable();
            $table->string('collage_section')->nullable();
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

            $table->dropColumn('h_school_section');
            $table->dropColumn('collage_section');
            
        });
    }
}
