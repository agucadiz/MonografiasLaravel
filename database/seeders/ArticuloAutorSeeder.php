<?php

namespace Database\Seeders;

use App\Models\Articulo_autor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticuloAutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artaut = new Articulo_autor([
            'articulo_id' => 1,
            'autor_id' => 1,
        ]);
        $artaut->save();

        $artaut = new Articulo_autor([
            'articulo_id' => 1,
            'autor_id' => 2,
        ]);
        $artaut->save();

        $artaut = new Articulo_autor([
            'articulo_id' => 2,
            'autor_id' => 9,
        ]);
        $artaut->save();

        $artaut = new Articulo_autor([
            'articulo_id' => 2,
            'autor_id' => 7,
        ]);
        $artaut->save();

        $artaut = new Articulo_autor([
            'articulo_id' => 2,
            'autor_id' => 5,
        ]);
        $artaut->save();

        $artaut = new Articulo_autor([
            'articulo_id' => 2,
            'autor_id' => 2,
        ]);
        $artaut->save();

        $artaut = new Articulo_autor([
            'articulo_id' => 3,
            'autor_id' => 3,
        ]);
        $artaut->save();

        $artaut = new Articulo_autor([
            'articulo_id' => 3,
            'autor_id' => 9,
        ]);
        $artaut->save();

        $artaut = new Articulo_autor([
            'articulo_id' => 3,
            'autor_id' => 8,
        ]);
        $artaut->save();

        $artaut = new Articulo_autor([
            'articulo_id' => 4,
            'autor_id' => 3,
        ]);
        $artaut->save();

        $artaut = new Articulo_autor([
            'articulo_id' => 4,
            'autor_id' => 5,
        ]);
        $artaut->save();

        $artaut = new Articulo_autor([
            'articulo_id' => 5,
            'autor_id' => 4,
        ]);
        $artaut->save();

        $artaut = new Articulo_autor([
            'articulo_id' => 5,
            'autor_id' => 9,
        ]);
        $artaut->save();

        $artaut = new Articulo_autor([
            'articulo_id' => 5,
            'autor_id' => 1,
        ]);
        $artaut->save();

        $artaut = new Articulo_autor([
            'articulo_id' => 6,
            'autor_id' => 9,
        ]);
        $artaut->save();

        $artaut = new Articulo_autor([
            'articulo_id' => 7,
            'autor_id' => 5,
        ]);
        $artaut->save();

        $artaut = new Articulo_autor([
            'articulo_id' => 8,
            'autor_id' => 8,
        ]);
        $artaut->save();

        $artaut = new Articulo_autor([
            'articulo_id' => 8,
            'autor_id' => 4,
        ]);
        $artaut->save();

        $artaut = new Articulo_autor([
            'articulo_id' => 9,
            'autor_id' => 6,
        ]);
        $artaut->save();

        $artaut = new Articulo_autor([
            'articulo_id' => 9,
            'autor_id' => 7,
        ]);
        $artaut->save();

        $artaut = new Articulo_autor([
            'articulo_id' => 9,
            'autor_id' => 8,
        ]);
        $artaut->save();
    }
}
