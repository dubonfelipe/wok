<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_locations', function (Blueprint $table) {
            $table->increments('id_locations');
            $table->string('direccion');
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
        Schema::drop('wok_locations');
    }
}
