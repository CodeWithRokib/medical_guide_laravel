<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignDieseaspatient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dieseaspatients', function (Blueprint $table) {
           // $table->foreign('dieseas_id')->references('id')->on('dieseas');
            $table->foreign('patient_id')->references('id')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dieseaspatients', function (Blueprint $table) {
          //  $table->dropForeign(['dieseas_id']);
            $table->dropForeign(['patient_id']);
        });
    }
}
