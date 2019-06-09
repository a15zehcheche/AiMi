<?php
namespace AiMi\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoTalla extends Model
{
    protected $primaryKey = ['ID_PRODUCTO', 'ID_TALLA'];
    public $incrementing = false;
    protected $table = 'PRODUCTO_TALLA';
    public $timestamps = false;
}