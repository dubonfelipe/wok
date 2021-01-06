<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_cliente', function (Blueprint $table) {
            $table->increments('id_cliente');
            $table->string('nombre');
            $table->string('nit_cliente');
            $table->string('correo')->nullable();
            $table->string('dpi')->nullable();
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
        Schema::drop('wok_cliente');
    }
}
