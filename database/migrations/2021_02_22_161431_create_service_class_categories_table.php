<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceClassCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_class_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('classes_name')->nullable();
            $table->bigInteger('medium_id')->unsigned();
            $table->foreign('medium_id')->references('id')->on('service_medium_categories')->onDelete('cascade');
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
        Schema::dropIfExists('service_class_categories');
    }
}
