<?php

namespace AiMi\Bbdd;
use AiMi\Models\Usuari;

class UsuariDao {
    public function findAll() 
    {
        return Usuari::all();
    }
    public function findById($id) 
    {
        return Usuari::find($id);
    }

    public function save(Usuari $usuari)
    {
        return $usuari->save();
    }

    public function delete(Usuari $usuari)
    {
        return $usuari->delete();
    }
}
?>