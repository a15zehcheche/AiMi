<?php
namespace AiMi\Models;

use Illuminate\Database\Eloquent\Model;

class Talla extends Model
{
    protected $table = 'TALLA';
    protected $primaryKey = 'ID';

    public $timestamps = true;
    public function productos()
    {
        return $this->belongsToMany('AiMi\Models\Producto');
    }

}