<?php

namespace AiMi\Controller;

use AiMi\Bbdd\CategoriaDao;
use AiMi\Models\Categoria;

class CategoriaManager
{
    public function __construct()
    {
        $this->categoriaDao = new CategoriaDao();
    }

    public function findAll()
    {
        return $this->categoriaDao->findAll();
    }

    public function save($body)
    {
        try {
            $categoria = new Categoria();
            $categoria->TEXTO =  $body->TEXTO;
            return array(
                'done' => $this->categoriaDao->save($categoria)
            );
        } catch (\Exception $e) {
            return array(
                'done' => false,
                'err' => $e->getMessage(),
            );
        }
    }
    public function update($body, $id)
    {
        $genero = Categoria::find($id);

        if (!$genero) {
            return [
                'done' => false
            ];
        }
        try {
            if (array_key_exists('TEXTO', (array)$body)) {
                $genero->TEXTO =  $body->TEXTO;
            } else {
                return array(
                    'done' => false,
                    'message' => 'Require TEXTO'
                );
            }
            return array(
                'done' => $this->categoriaDao->save($genero)
            );
        } catch (\Exception $e) {
            return array(
                'done' => false,
                'err' => $e->getMessage(),
            );
        }
    }

    public function delete($id)
    {
        $categoria = $this->categoriaDao->findById($id);

        if (!$categoria) {
            return [
                'done' => false
            ];
        }

        try {
            return array("done" => $this->categoriaDao->delete($categoria));
        } catch (\Exception $e) {
            return array(
                'done' => false,
                'err' => $e->getMessage(),
            );
        }
    }
}
