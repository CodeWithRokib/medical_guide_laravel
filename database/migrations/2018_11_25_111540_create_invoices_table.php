<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_no');
            $table->string('payment_type')->nullable();
            $table->string('trxId')->nullable();
            $table->integer('total');
            $table->integer('discount')->nullable();
            $table->integer('customer_type')->default(0);
            $table->string('product_type')->nullable();
            $table->unsignedInteger('supplier_id')->nullable();
            $table->unsignedInteger('patient_id')->nullable();
            $table->unsignedInteger('warehouse_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('note',5000)->nullable();
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
        Schema::dropIfExists('invoices');
    }
}
