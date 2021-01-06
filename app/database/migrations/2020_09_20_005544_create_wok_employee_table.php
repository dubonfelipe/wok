<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokEmployeeTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_employee', function (Blueprint $table) {
            $table->increments('id_employee');
            $table->string('primer_nombre');
            $table->string('segundo_nombre')->nullable();
            $table->string('otros_nombres')->nullable();
            $table->string('primer_apellido');
            $table->string('segundo_apellido')->nullable();
            $table->string('apallido_casada')->nullable();
            $table->string('documento_identificacion');
            $table->string('email')->unique();
            $table->string('nit')->nullable();
            $table->integer('telefono');
            $table->integer('telefono2')->nullable();
            $table->integer('restaurante')->unsigned();
            $table->foreign('restaurante')->references('id_restaurant')->on('wok_restaurant')->onDelete('cascade');
            $table->integer('tipo_empleado')->unsigned();
            $table->foreign('tipo_empleado')->references('id_type_employee')->on('wok_type_employee')->onDelete('cascade');
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
        Schema::drop('wok_employee');
    }
}
