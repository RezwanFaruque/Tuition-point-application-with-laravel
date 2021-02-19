<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTutoringInfosToTutorInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tutor_infos', function (Blueprint $table) {
            $table->string('prefered_class')->nullable();
            $table->string('prefered_subject')->nullable();
            $table->string('prefered_medium')->nullable();
            $table->string('prefared_area')->nullable();
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
            $table->dropColumn('prefered_class');
            $table->dropColumn('prefered_subject');
            $table->dropColumn('prefered_medium');
            $table->dropColumn('prefared_area');
        });
    }
}
