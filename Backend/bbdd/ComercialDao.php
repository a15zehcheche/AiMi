<?php

namespace AiMi\Bbdd;
use AiMi\Models\Comercial;

class ComercialDao {
    public function findAll() 
    {
        return Comercial::all();
    }
    public function findById($id) 
    {
        return Comercial::find($id);
    }

    public function save(Comercial $comercial) 
    {
        return $comercial->save();
    }

    public function delete(Comercial $comercial) 
    {
        return $comercial->delete();
    }
}
?>