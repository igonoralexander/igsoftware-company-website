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
            $table->string('user_id');
            $table->string('payment_method');
            $table->string('subtotal');
            $table->string('delivery_fee');
            $table->string('delivery_method');
            $table->string('address_details');
            $table->string('total_price');
            $table->tinyInteger('status')->default('0');
            $table->string('message')->nullable();
            $table->string('tracking_id');
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
        Schema::dropIfExists('orders');
    }
}
