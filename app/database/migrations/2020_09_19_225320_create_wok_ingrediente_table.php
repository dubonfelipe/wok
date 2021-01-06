<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokIngredienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_ingrediente', function (Blueprint $table) {
            $table->increments('id_ingrediente');
            $table->string('nombre_ingrediente');
            $table->double('cantidad',6,2);
            $table->string('medida');
            $table->integer('receta')->unsigned();
            $table->foreign('receta')->references('id_receta')->on('wok_receta')->onDelete('cascade');
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
        Schema::drop('wok_ingrediente');
    }
}
