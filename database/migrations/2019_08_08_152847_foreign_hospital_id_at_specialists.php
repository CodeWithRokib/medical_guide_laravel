<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignHospitalIdAtSpecialists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('specialists', function (Blueprint $table) {
            // $table->foreign('hospital_id')->references('id')->on('hospitals');
        });
        // $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('specialists', function (Blueprint $table) {
            // $table->dropForeign(['hospital_id']);
        });
    }
}
