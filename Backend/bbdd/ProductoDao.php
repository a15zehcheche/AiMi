<?php

namespace AiMi\Bbdd;
use AiMi\Models\Producto;

class ProductoDao {
    public function findAll() 
    {
        return Producto::all();
    }
}
?>