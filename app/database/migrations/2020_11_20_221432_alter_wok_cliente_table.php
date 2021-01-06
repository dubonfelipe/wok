<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterWokClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wok_cliente', function (Blueprint $table) {
            $table->integer('restaurante')->unsigned()->nullable();
            $table->foreign('restaurante')->references('id_restaurant')->on('wok_restaurant')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
