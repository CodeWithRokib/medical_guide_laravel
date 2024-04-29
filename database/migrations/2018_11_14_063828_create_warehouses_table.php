<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Warehouse;
use Faker\Generator as Faker;

class CreateWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('phone')->unique();
            $table->string('address')->nullable();
            $table->string('contact_person')->nullable();
            $table->timestamps();

        });

            Warehouse::create([
                    'name' => 'warehouse1',
                    'phone' => "01727764161",
                    'address'=>'warehouse address'
            ]);
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warehouses');
    }
}
