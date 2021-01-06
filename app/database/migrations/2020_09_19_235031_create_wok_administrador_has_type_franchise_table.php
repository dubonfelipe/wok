<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokAdministradorHasTypeFranchiseTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_administrador_has_type_franchise', function (Blueprint $table) {
            $table->integer('type_franquicia')->unsigned();
            $table->foreign('type_franquicia')->references('id_type_franchise')->on('wok_type_franchise')->onDelete('cascade');
            $table->integer('administrador')->unsigned();
            $table->foreign('administrador')->references('id_administrador')->on('wok_administrador')->onDelete('cascade');
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
        Schema::drop('wok_administrador_has_type_franchise');
    }
}
