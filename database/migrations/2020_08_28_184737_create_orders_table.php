<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
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
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('address_id');
            $table->unsignedBigInteger('payment_id');
            $table->unsignedBigInteger('transaction_id');
            $table->string('order_number');
            $table->date('order_date');
            $table->date('delivery_date');
            $table->enum('is_paid',['paid','unpaid']);
            $table->date('payment_date');
            $table->float('cart_total');
            $table->string('status');
            $table->timestamps();
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('address_id')->references('id')->on('addresses');
            // $table->foreign('payment_id')->references('id')->on('payments');
            // $table->foreign('transaction_id')->references('id')->on('transactions');
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
}
