<?php

use Illuminate\Database\Seeder;

class TypeFranquiseTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('wok_type_franchise')->insert([
            'descripcion_franquicia'=>'Franquicia Piloto'
        ]);*/

        DB::table('wok_type_price')->insert([
            'descripcion' => 'determinado'
        ]);
    }
}
