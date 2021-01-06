<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokAdministradorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_administrador', function (Blueprint $table) {
            $table->increments('id_administrador');
            $table->string('primer_nombre');
            $table->string('segundo_nombre')->nullable();
            $table->string('otros_nombres')->nullable();
            $table->string('primer_apellido');
            $table->string('segundo_apellido')->nullable();
            $table->string('apallido_casada')->nullable();
            $table->string('documento_identificacion');
            $table->string('email')->unique();
            $table->integer('telefono');
            $table->integer('telefono2')->nullable();
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
        Schema::drop('wok_administrador');
    }
}
