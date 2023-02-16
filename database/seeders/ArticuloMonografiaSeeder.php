<?php

namespace Database\Seeders;

use App\Models\Articulo_monografia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticuloMonografiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artmono = new Articulo_monografia([
            'articulo_id' => 1,
            'monografia_id' => 1,
        ]);
        $artmono->save();

        $artmono = new Articulo_monografia([
            'articulo_id' => 2,
            'monografia_id' => 1,
        ]);
        $artmono->save();

        $artmono = new Articulo_monografia([
            'articulo_id' => 3,
            'monografia_id' => 1,
        ]);
        $artmono->save();

        $artmono = new Articulo_monografia([
            'articulo_id' => 3,
            'monografia_id' => 2,
        ]);
        $artmono->save();

        $artmono = new Articulo_monografia([
            'articulo_id' => 1,
            'monografia_id' => 2,
        ]);
        $artmono->save();

        $artmono = new Articulo_monografia([
            'articulo_id' => 4,
            'monografia_id' => 2,
        ]);
        $artmono->save();

        $artmono = new Articulo_monografia([
            'articulo_id' => 5,
            'monografia_id' => 2,
        ]);
        $artmono->save();

        $artmono = new Articulo_monografia([
            'articulo_id' => 6,
            'monografia_id' => 2,
        ]);
        $artmono->save();

        $artmono = new Articulo_monografia([
            'articulo_id' => 7,
            'monografia_id' => 2,
        ]);
        $artmono->save();

        $artmono = new Articulo_monografia([
            'articulo_id' => 8,
            'monografia_id' => 3,
        ]);
        $artmono->save();

        $artmono = new Articulo_monografia([
            'articulo_id' => 9,
            'monografia_id' => 3,
        ]);
        $artmono->save();
    }
}
