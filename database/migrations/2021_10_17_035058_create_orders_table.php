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
            $table->integer('user_id');
            $table->integer('billing_id');
            $table->string('discount')->nulllable();
            $table->string('subtotal')->nulllable();
            $table->string('shipping')->nulllable();
            $table->string('vat')->nulllable();
            $table->string('total')->nulllable();
            $table->integer('payment_method');  // 1 for unpaid 2 for paid
            $table->integer('payment_status');  // 1 for unpaid 2 for paid
            $table->integer('status'); // 1 for pending 2 for processing 3 for onthe way 4 for delivery 5 fore cancel
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
