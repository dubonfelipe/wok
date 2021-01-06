<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_menu', function (Blueprint $table) {
            $table->increments('id_menu');
            $table->string('descripcion');
            $table->string('resumen');
            $table->string('img');
            $table->integer('type_foods')->unsigned();
            $table->foreign('type_foods')->references('id_type_foods')->on('wok_type_foods')->onDelete('cascade');
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
        Schema::drop('wok_menu');
    }
}
