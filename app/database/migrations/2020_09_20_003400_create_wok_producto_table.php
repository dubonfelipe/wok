<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_producto', function (Blueprint $table) {
            $table->increments('id_producto');
            $table->string('nombre_producto');
            $table->string('descripcion')->nullable();
            $table->double('stock_minimo',10,2)->nullable();
            $table->string('medidas');
            $table->boolean('estado')->nullable();
            $table->integer('restaurante')->unsigned();
            $table->foreign('restaurante')->references('id_restaurant')->on('wok_restaurant')->onDelete('cascade');
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
        Schema::drop('wok_producto');
    }
}
