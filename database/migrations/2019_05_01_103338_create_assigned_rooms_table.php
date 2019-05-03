<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignedRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigned_rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('room_time_id')->unsigned();
            $table->bigInteger('room_id')->unsigned();
            $table->bigInteger('subject_id')->unsigned();
            $table->timestamps();

            $table->foreign('room_time_id')->references('id')->on('room_times');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->foreign('subject_id')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assigned_rooms');
    }
}
