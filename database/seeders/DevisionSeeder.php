<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Seeder;

class DevisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Division::insert([
            ['name' => 'Dhaka'],
            ['name' => 'CTG']


        ]);
    }
}
