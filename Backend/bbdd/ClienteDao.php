<?php

namespace AiMi\Bbdd;
use AiMi\Models\Cliente;

class ClienteDao {
    public function findAll() 
    {
        return Cliente::all();
    }
    public function findById($id) 
    {
        return Cliente::find($id);
    }

    public function save(Cliente $cliente) 
    {
        return $cliente->save();
    }

    public function delete(Cliente $cliente) 
    {
        return $cliente->delete();
    }
}
?>