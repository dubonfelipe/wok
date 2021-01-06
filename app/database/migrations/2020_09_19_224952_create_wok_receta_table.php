<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokRecetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_receta', function (Blueprint $table) {
            $table->increments('id_receta');
            $table->longText('descripcion_proceso');
            $table->string('tiempo_preparacion');
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
        Schema::drop('wok_receta');
    }
}
