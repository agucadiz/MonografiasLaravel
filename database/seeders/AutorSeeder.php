<?php

namespace Database\Seeders;

use App\Models\Autor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $autor = new Autor([
            'nombre' => 'Alan Turing',
        ]);
        $autor->save();

        $autor = new Autor([
            'nombre' => 'Ada Lovelace',
        ]);
        $autor->save();

        $autor = new Autor([
            'nombre' => 'Linus Torvalds',
        ]);
        $autor->save();

        $autor = new Autor([
            'nombre' => 'Evelyn Berezin',
        ]);
        $autor->save();

        $autor = new Autor([
            'nombre' => 'Richard Stallman',
        ]);
        $autor->save();

        $autor = new Autor([
            'nombre' => 'Alejandro Jiménez',
        ]);
        $autor->save();

        $autor = new Autor([
            'nombre' => 'Pablo Morales',
        ]);
        $autor->save();

        $autor = new Autor([
            'nombre' => 'Juan Carlos Díaz',
        ]);
        $autor->save();

        $autor = new Autor([
            'nombre' => 'Selena Muñoz',
        ]);
        $autor->save();
    }
}
