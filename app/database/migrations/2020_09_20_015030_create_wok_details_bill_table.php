<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokDetailsBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_details_bill', function (Blueprint $table) {
            $table->increments('id_details_bill');
            $table->string('descripcion');
            $table->integer('cantidad');
            $table->double('precio_unitario',8,2);
            $table->string('estado',2);
            $table->integer('idmenu')->unsigned();
            $table->double('descuento',8,2);
            $table->double('impuesto_valor_agregado',8,2);
            $table->integer('bill')->unsigned();
            $table->foreign('bill')->references('id_bill')->on('wok_bill')->onDelete('cascade');
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
        Schema::drop('wok_details_bill');
    }
}
