<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPoliceStationIdBloodBanks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bloodbanks', function (Blueprint $table) {
            // $table->unsignedInteger('police_station_id');
            // $table->unsignedInteger('area_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bloodbanks', function (Blueprint $table) {
            //
        });
    }
}
