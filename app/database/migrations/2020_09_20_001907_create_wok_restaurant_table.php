<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokRestaurantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_restaurant', function (Blueprint $table) {
            $table->increments('id_restaurant');
            $table->integer('franquicia')->unsigned();
            $table->foreign('franquicia')->references('id_franchise')->on('wok_franchise')->onDelete('cascade');
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
        Schema::drop('wok_restaurant');
    }
}
