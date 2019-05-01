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
            $table->bigIncrements('Assigned_Room_ID');
            $table->bigInteger('room_time_id')->unsigned();
            $table->bigInteger('room_id')->unsigned();
            $table->bigInteger('subject_id')->unsigned();
            $table->timestamps();

            $table->foreign('room_time_id')->references('Room_Time_ID')->on('room_times');
            $table->foreign('room_id')->references('Room_ID')->on('rooms');
            $table->foreign('subject_id')->references('Subject_ID')->on('subjects');
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
