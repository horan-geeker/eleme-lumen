<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('commentable_id');
            $table->string('commentable_type');
            $table->string('username');
            $table->string('rateTime');
            $table->string('deliveryTime')->nullable();
            $table->string('score')->nullable();
            $table->integer('rateType');
            $table->string('text');
            $table->string('avatar');
            $table->string('recommend');

//            $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade');
//            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade');
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
        Schema::drop('ratings');
    }
}
