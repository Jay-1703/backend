<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('order_no');
            $table->string('item_name');
            $table->integer('qty');
            $table->integer('price');
            $table->integer('gst_percentage');
            $table->integer('subtotal_price');
            $table->integer('total_price');
            $table->unsignedBigInteger('bill_id');
            $table->foreign('bill_id')->references('bill_no')->on('invoice');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
