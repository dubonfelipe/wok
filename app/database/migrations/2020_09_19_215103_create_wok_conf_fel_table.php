<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokConfFelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_conf_fel', function (Blueprint $table) {
            $table->increments('id_conf_fel');
            $table->binary('llave_electronica');
            $table->string('usuario_cert')->nullable();
            $table->string('token_autorizacion');
            $table->string('nombre_contribuyente');
            $table->string('nit');
            $table->integer('owner')->unsigned();
            $table->foreign('owner')->references('id_owner')->on('wok_owner')->onDelete('cascade');
            $table->integer('certificador')->unsigned();
            $table->foreign('certificador')->references('id_certificador')->on('wok_certificador')->onDelete('cascade');
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
        Schema::drop('wok_conf_fel');
    }
}
