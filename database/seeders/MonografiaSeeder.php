<?php

namespace Database\Seeders;

use App\Models\Monografia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonografiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mono = new Monografia([
            'titulo' => 'Base da datos relacionales',
            'anyo' => 1993,
        ]);
        $mono->save();

        $mono = new Monografia([
            'titulo' => 'Diseño de interfaces',
            'anyo' => 2001,
        ]);
        $mono->save();

        $mono = new Monografia([
            'titulo' => 'Arquitecturas de software',
            'anyo' => 1998,
        ]);
        $mono->save();
    }
}
