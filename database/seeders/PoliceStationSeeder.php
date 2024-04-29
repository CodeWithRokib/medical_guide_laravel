<?php

namespace Database\Seeders;

use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class PoliceStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        PoliceStation::insert([
            ['name' => 'Mirpur Model Thana'],
            ['name' => 'Gulshan Model Thana']
        ]);
    }
}
