<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWokMenuHasTypeFranchiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wok_menu_has_type_franchise', function (Blueprint $table) {
            $table->integer('type_franquicia')->unsigned();
            $table->foreign('type_franquicia')->references('id_type_franchise')->on('wok_type_franchise')->onDelete('cascade');
            $table->integer('menu')->unsigned();
            $table->foreign('menu')->references('id_menu')->on('wok_menu')->onDelete('cascade');
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
        Schema::drop('wok_menu_has_type_franchise');
    }
}
