<?php

use App\Enums\SlotStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_slots', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('doctor_id');
            $table->date('date');
            $table->time('slot_from');
            $table->time('slot_to');
            $table->tinyInteger('status')->default(SlotStatus::UNCONFIRM);
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
        Schema::dropIfExists('doctor_slots');
    }
}
