<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokPriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_price', function (Blueprint $table) {
            $table->increments('id_price');
            $table->double('monto',6,2);
            $table->integer('type_price')->unsigned();
            $table->foreign('type_price')->references('id_type_price')->on('wok_type_price')->onDelete('cascade');
            $table->integer('menu')->unsigned();
            $table->foreign('menu')->references('id_menu')->on('wok_menu')->onDelete('cascade');
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
        Schema::drop('wok_price');
    }
}
