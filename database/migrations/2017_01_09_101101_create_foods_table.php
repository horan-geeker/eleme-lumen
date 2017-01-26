<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods',function(Blueprint $table){
            $table->increments('id');
            $table->integer('goods_id');
            $table->string('name');
            $table->string('price');
            $table->string('oldPrice')->nullable();
            $table->string('description')->nullable();
            $table->string('sellCount');
            $table->string('rating');
            $table->string('info')->nullable();
            $table->string('icon');
            $table->string('image');

//            $table->foreign('good_id')->references('id')->on('goods')->onDelete('cascade');
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
        Schema::drop('foods');
    }
}
