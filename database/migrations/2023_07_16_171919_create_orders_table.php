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
            $table->bigIncrements('id');

            $table->string('order_number');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('listing_id');

            $table->enum('status',['pending','processing','completed','declined'])->default('pending');
            $table->float('total_amount');
            $table->boolean('is_paid')->default(false);
            $table->enum('payment_method',['paypal','card','gcash'])->default('paypal');

            $table->string('buyer_first');
            $table->string('buyer_last');

            $table->string('buyer_phone');


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('listing_id')->references('id')->on('listings')->onDelete('cascade');

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
};
