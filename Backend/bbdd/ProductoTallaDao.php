<?php

namespace AiMi\Bbdd;
use AiMi\Models\ProductoTalla;

class ProductoTallaDao {
    public function findAll() 
    {
        return ProductoTalla::all();
    }
    public function findById($idP,$idT) 
    {
        return ProductoTalla::where('ID_PRODUCTO','=', $idP)
        ->where('ID_TALLA', '=', $idT)
        ->first();
    }

    public function save(ProductoTalla $productoTalla) 
    {
        return $productoTalla->save();
    }

    public function delete($idP,$idT) {
        return ProductoTalla::where('ID_PRODUCTO','=', $idP)
        ->where('ID_TALLA', '=', $idT)->delete();
    }
}
?>