<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('warehouse_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('invoice_id');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('company_id')->nullable();
            $table->integer('type')->default(1);
            $table->integer('qty');
            $table->string('product_type');
            $table->integer('bonus')->nullable();
            $table->integer('price')->nullable();
            $table->integer('mrp')->nullable();
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
        Schema::dropIfExists('purchases');
    }
}
