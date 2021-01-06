<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokPedidoTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_pedido', function (Blueprint $table) {
            $table->increments('id_pedido');
            $table->string('estado',2);
            $table->integer('cliente')->unsigned();
            $table->foreign('cliente')->references('id_cliente')->on('wok_cliente')->onDelete('cascade');
            $table->integer('table')->unsigned();
            $table->foreign('table')->references('id_table')->on('wok_table')->onDelete('cascade');
            $table->integer('restaurante')->unsigned();
            $table->foreign('restaurante')->references('id_restaurant')->on('wok_restaurant')->onDelete('cascade');
            $table->string('dirrecion_pedido')->nullable();
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
        Schema::drop('wok_pedido');
    }
}
