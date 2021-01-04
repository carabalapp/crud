<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Articulo;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $articulo = [
        //     'admin' =>    Articulo::create([ 'password' => Hash::make('freidnea'), 'email' => 'admin@admin.com']),
        //     'cliente' =>  Articulo::create(['password' => Hash::make('123'), 'email' => 'cliente@cliente.com']),
        //     'super' =>    Articulo::create(['password' => Hash::make('freidnea'), 'email' => 'federicoyarza295@gmail.com','email_verified_at'=>Carbon::now()]),
        //     'ronal' =>    Articulo::create(['password' => Hash::make('ronal0810'), 'email' => 'medinaronal1994@gmail.com','email_verified_at'=>Carbon::now()]),
        //   ];

          Articulo::create(
              [
            'codigo'=>'001',
            'descripcion'=> 'articulo 01',
            'cantidad' => '2',
            'precio' => '15.00'
          ]
        );
    }
}
