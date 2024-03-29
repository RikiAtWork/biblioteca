<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = "autor";
    use HasFactory;

    public function libros(){
        return $this->hasMany(Libro::class);
    }
}
