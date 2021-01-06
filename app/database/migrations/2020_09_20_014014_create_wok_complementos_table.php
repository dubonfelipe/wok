<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokComplementosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_complemento', function (Blueprint $table) {
            $table->increments('id_complemento');
            $table->string('descripcion');
            $table->integer('bill')->unsigned();
            $table->foreign('bill')->references('id_bill')->on('wok_bill')->onDelete('cascade');
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
        Schema::drop('wok_complemento');
    }
}
