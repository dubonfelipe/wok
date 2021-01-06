<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_table', function (Blueprint $table) {
            $table->increments('id_table');
            $table->string('nombre');
            $table->string('estado',2);
            $table->string('servicio',2);
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
        Schema::drop('wok_table');
    }
}
