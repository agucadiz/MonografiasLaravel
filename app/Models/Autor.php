<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;

class Autor extends Model
{
    use HasFactory;

    protected $table = 'autores';

    public function articulos()
    {
        return $this->belongsToMany(Articulo::class);
    }
}
