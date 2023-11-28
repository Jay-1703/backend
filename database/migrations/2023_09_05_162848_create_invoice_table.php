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
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->integer('bill_no');
            $table->string('bill_from',100);
            $table->string('bill_to',100);
            $table->string('address_1',100);
            $table->string('address_2',100);
            $table->string('city');
            $table->string('state');
            $table->string('pincode_no');
            $table->string('gst_no');
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice');
    }
};
