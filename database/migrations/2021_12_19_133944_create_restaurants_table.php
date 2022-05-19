<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('res_name');
            $table->string('trade_license');
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->string('res_discount')->nullable();
            $table->longText('description');
            $table->string('res_image')->nullable();
            $table->string('status')->nullable()->comment('1=active, 2=pending');
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
        Schema::dropIfExists('restaurants');
    }
}
