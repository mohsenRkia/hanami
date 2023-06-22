<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_main_details', function (Blueprint $table) {
            $table->id();
            $table->date('start_day')->nullable();
            $table->date('end_day')->nullable();
            $table->unsignedInteger('type_moving_id');
            $table->integer('tour_period')->nullable();
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
        Schema::dropIfExists('tour_main_details');
    }
};
