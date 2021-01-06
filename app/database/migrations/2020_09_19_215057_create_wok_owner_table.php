<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_owner', function (Blueprint $table) {
            $table->increments('id_owner');
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
        Schema::drop('wok_owner');
    }
}
