<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokCorteCaja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_corte_caja', function (Blueprint $table) {
            $table->increments('id_corte');
            $table->double('ef_caja',12,2);
            $table->double('cierre_ef',12,2)->nullable();
            $table->double('cierre_tj',12,2)->nullable();
            $table->string('fecha_cierre')->nullable();
            $table->string('usr')->nullable();
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
        Schema::drop('wok_corte_caja');
    }
}
