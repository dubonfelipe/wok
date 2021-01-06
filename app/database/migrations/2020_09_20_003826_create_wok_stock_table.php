<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_stock', function (Blueprint $table) {
            $table->increments('id_stock');
            $table->double('cantidad',10,2);
            $table->string('in_out_stocks',2);
            $table->integer('caducidad_dias')->nullable();
            $table->boolean('estado')->nullable();
            $table->integer('producto')->unsigned();
            $table->foreign('producto')->references('id_producto')->on('wok_producto')->onDelete('cascade');
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
        Schema::drop('wok_stock');
    }
}
