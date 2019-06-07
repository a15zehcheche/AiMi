<?php

namespace AiMi\Bbdd;
use AiMi\Models\Categoria;

class CategoriaDao {
    public function findAll() 
    {
        return Categoria::all();
    }
    public function findById($id) 
    {
        return Categoria::find($id);
    }

    public function save(Categoria $categoria) 
    {
        return $categoria->save();
    }

    public function delete($id) {
        return $this->findById($id)->delete();
    }
}
?>