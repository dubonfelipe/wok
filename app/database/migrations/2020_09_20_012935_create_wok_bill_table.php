<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_bill', function (Blueprint $table) {
            $table->increments('id_bill');
            $table->string('estado_impreso',2);
            $table->string('numero_autorizacion');
            $table->string('serie_documento');
            $table->string('numero_documento');
            $table->string('numero_acceso');
            $table->dateTime('fecha_hora_facturacion');
            $table->string('fecha_hora_certificacion');
            $table->string('tipo_moneda',4);
            $table->string('tipo_pago',4);
            $table->integer('fel')->unsigned();
            $table->foreign('fel')->references('id_fel')->on('wok_fel_type')->onDelete('cascade');
            $table->integer('pedido')->unsigned();
            $table->foreign('pedido')->references('id_pedido')->on('wok_pedido')->onDelete('cascade');
            $table->integer('empleado')->unsigned();
            $table->foreign('empleado')->references('id_employee')->on('wok_employee')->onDelete('cascade');
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
        Schema::drop('wok_bill');
    }
}
