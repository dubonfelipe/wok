<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokFranchiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_franchise', function (Blueprint $table) {
            $table->increments('id_franchise');
            $table->string('direccion_franquicia');
            $table->integer('telefono')->nullable();
            $table->string('email')->nullable();
            $table->integer('type_franquicia')->unsigned();
            $table->foreign('type_franquicia')->references('id_type_franchise')->on('wok_type_franchise')->onDelete('cascade');
            $table->integer('owner')->unsigned();
            $table->foreign('owner')->references('id_owner')->on('wok_owner')->onDelete('cascade');
            $table->integer('persona_contable')->unsigned();
            $table->foreign('persona_contable')->references('id_per_con')->on('wok_person_contable')->onDelete('cascade');
            $table->integer('type_price')->unsigned();
            $table->foreign('type_price')->references('id_type_price')->on('wok_type_price')->onDelete('cascade');
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
        Schema::drop('wok_franchise');
    }
}
