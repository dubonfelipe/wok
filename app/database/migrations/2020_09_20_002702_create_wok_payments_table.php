<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_payments', function (Blueprint $table) {
            $table->increments('id_payments');
            $table->string('descripcion');
            $table->double('monto',10,2);
            $table->string('constante',2);
            $table->integer('restaurante')->unsigned();
            $table->foreign('restaurante')->references('id_restaurant')->on('wok_restaurant')->onDelete('cascade');
            $table->integer('proveedores')->unsigned();
            $table->foreign('proveedores')->references('id_proveedores')->on('wok_proveedores')->onDelete('cascade');
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
        Schema::drop('wok_payments');
    }

    /**AGREGAR TRIGGER
     * 
     *CREATE TRIGGER `AggConstantes` AFTER INSERT ON `wok_payments`
 FOR EACH ROW BEGIN
DECLARE	flag int;
DECLARE l_descripcion varchar(255);
DECLARE l_monto double(10,2);
DECLARE	l_constante varchar(2);
DECLARE l_restaurante int;
DECLARE l_proveedores int;
DECLARE curPayment CURSOR FOR SELECT descripcion, monto, constante, restaurante, proveedores FROM wok_payments 
   WHERE wok_payments.created_at BETWEEN DATE_FORMAT(NOW() - INTERVAL 1 MONTH, '%Y-%m-01 00:00:00') AND DATE_FORMAT(LAST_DAY(NOW() - INTERVAL 1 MONTH), '%Y-%m-%d 23:59:59'); 


        SELECT COUNT(*) into flag FROM wok_payments 
                WHERE YEAR(created_at) = YEAR(CURRENT_DATE()) 
                AND MONTH(created_at)  = MONTH(CURRENT_DATE());
                
  IF flag = 1 THEN
  OPEN curPayment;
  c1_loop: LOOP
fetch curPayment into l_descripcion ,l_monto ,l_constante,l_restaurante,l_proveedores;
        INSERT INTO `wok_payments`( `descripcion`, `monto`, `constante`, `restaurante`, `proveedores`, `created_at`, `updated_at`) VALUES 
 (l_descripcion,
  l_monto,
  l_constante,
  l_restaurante,
  l_proveedores,
  SYSDATE(),
  SYSDATE());
END LOOP c1_loop;

   CLOSE curPayment;
  END IF;
                
END
     */
}
