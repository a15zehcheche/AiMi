<?php

namespace AiMi\Controller;

use AiMi\Bbdd\GeneroDao;
use AiMi\Models\Genero;

class GeneroManager
{
    public function __construct()
    {
        $this->generoDao = new GeneroDao();
    }

    public function findAll()
    {
        return $this->generoDao->findAll();
    }

    public function save($body)
    {
        try {
            $genero = new Genero();
            $genero->TEXTO =  $body->TEXTO;
            return array(
                'done' => $this->generoDao->save($genero)
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
        $genero = Genero::find($id);

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
                'done' => $this->generoDao->save($genero)
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
        $genero = $this->generoDao->findById($id);

        if (!$genero) {
            return [
                'done' => false
            ];
        }

        try {
            return array("done" => $this->generoDao->delete($id));
        } catch (\Exception $e) {
            return array(
                'done' => false,
                'err' => $e->getMessage(),
            );
        }
    }
}
