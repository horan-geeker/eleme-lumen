<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers',function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('deliveryTime');
            $table->string('score');
            $table->string('serviceScore');
            $table->string('foodScore');
            $table->string('rankRate');
            $table->string('minPrice');
            $table->string('deliveryPrice');
            $table->string('ratingCount');
            $table->string('sellCount');
            $table->string('bulletin');
            $table->string('avatar');

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
        Schema::drop('sellers');
    }
}
