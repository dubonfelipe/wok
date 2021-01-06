<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokAdminEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_admin_employee', function (Blueprint $table) {
            $table->increments('id_employee');
            $table->string('numero_cuenta')->nullable();
            $table->string('monetaria_ahorro',2)->nullable();
            $table->double('monto',8,2);
            $table->integer('banco')->unsigned();
            $table->foreign('banco')->references('id_banco')->on('wok_banco')->onDelete('cascade');
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
        Schema::drop('wok_admin_employee');
    }
}
