<?php

namespace AiMi\Bbdd;
use AiMi\Models\Genero;

class GeneroDao {
    public function findAll() 
    {
        return Genero::all();
    }
    public function findById($id) 
    {
        return Genero::find($id);
    }

    public function save(Genero $genero) 
    {
        return $genero->save();
    }

    public function delete($id) {
        return $this->findById($id)->delete();
    }
    
}
?>