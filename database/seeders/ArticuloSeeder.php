<?php

namespace Database\Seeders;

use App\Models\Articulo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articulo = new Articulo([
            'titulo' => 'Postgres SQL',
            'anyo' => 1992,
            'num_paginas' => 23,
        ]);
        $articulo->save();

        $articulo = new Articulo([
            'titulo' => 'Python',
            'anyo' => 2000,
            'num_paginas' => 35,
        ]);
        $articulo->save();

        $articulo = new Articulo([
            'titulo' => 'Laravel',
            'anyo' => 1992,
            'num_paginas' => 48,
        ]);
        $articulo->save();

        $articulo = new Articulo([
            'titulo' => 'Tailwind CSS',
            'anyo' => 1992,
            'num_paginas' => 13,
        ]);
        $articulo->save();

        $articulo = new Articulo([
            'titulo' => 'Typescript',
            'anyo' => 1992,
            'num_paginas' => 76,
        ]);
        $articulo->save();

        $articulo = new Articulo([
            'titulo' => 'JQuery',
            'anyo' => 1994,
            'num_paginas' => 88,
        ]);
        $articulo->save();

        $articulo = new Articulo([
            'titulo' => 'MVC',
            'anyo' => 1991,
            'num_paginas' => 51,
        ]);
        $articulo->save();

        $articulo = new Articulo([
            'titulo' => 'POO',
            'anyo' => 1997,
            'num_paginas' => 49,
        ]);
        $articulo->save();

        $articulo = new Articulo([
            'titulo' => 'Java',
            'anyo' => 2003,
            'num_paginas' => 93,
        ]);
        $articulo->save();
    }
}
