<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlotBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slot_bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('doctor_id');
            $table->unsignedInteger('doctor_slot_id');
            $table->tinyInteger('type');
            $table->tinyInteger('gender');
            $table->string('name');
            $table->string('phone');
            $table->string('age');
            $table->string('weight')->nullable();
            $table->string('location')->nullable();
            $table->timestamps();
        });
    }

  
}
