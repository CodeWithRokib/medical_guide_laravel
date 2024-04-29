<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('invoice_id')->nullable();
            $table->unsignedInteger('from_warehouse_id')->nullable();
            $table->unsignedInteger('to_warehouse_id')->nullable();
          //  $table->unsignedInteger('dieseas_id')->nullable();
            $table->unsignedInteger('product_id')->nullable();
            $table->unsignedInteger('patient_id')->nullable();
            $table->integer('status')->default(1);
            $table->integer('does_no')->nullable();
            $table->string('product_type');
            $table->integer('price')->nullable();
            $table->integer('qty')->default(1);
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
        Schema::dropIfExists('sales');
    }
}
