<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokFrasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_frases', function (Blueprint $table) {
            $table->increments('id_frases');
            $table->string('descripcion');
            $table->integer('fel')->unsigned();
            $table->foreign('fel')->references('id_fel')->on('wok_fel_type')->onDelete('cascade');
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
        Schema::drop('wok_frases');
    }
}
