<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto_ARM extends Model
{
    use HasFactory;
    protected $table = 'productos_arm';
    protected $fillable = ['nombre', 'descripcion', 'precio', 'stock'];
}
