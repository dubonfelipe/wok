<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokContactoClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_contacto', function (Blueprint $table) {
            $table->increments('id_contacto');
            $table->integer('telefono');
            $table->integer('cliente')->unsigned();
            $table->foreign('cliente')->references('id_cliente')->on('wok_cliente')->onDelete('cascade');
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
        Schema::drop('wok_contacto');
    }
}
