<?php

namespace AiMi\Bbdd;
use AiMi\Models\Talla;

class TallaDao {
    public function findAll() 
    {
        return Talla::all();
    }
    public function findById($id) 
    {
        return Talla::find($id);
    }

    public function save(Talla $talla) 
    {
        return $talla->save();
    }

    public function delete($id) {
        return $this->findById($id)->delete();
    }
}
?>