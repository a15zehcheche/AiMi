<?php

namespace AiMi\Controller;

use AiMi\Bbdd\ComercialDao;
use AiMi\Models\Comercial;

class ComercialManager
{
    public function __construct()
    {
        $this->comercialDao = new ComercialDao();
    }

    public function findAll()
    {
        return $this->comercialDao->findAll();
    }

    public function save($body)
    {
        try {
            $comercial = new Comercial();
            $comercial->CODIGO_COMERCIO =  $body->CODIGO_COMERCIO;
            $comercial->NOMBRE_COMERCIAL =  $body->NOMBRE_COMERCIAL;
            $comercial->TELEFONO_COMERCIAL =  $body->TELEFONO_COMERCIAL;

            return array(
                'done' => $this->comercialDao->save($comercial)
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
        $comercial = Comercial::find($id);

        if (!$comercial) {
            return [
                'done' => false
            ];
        }
        try {
            if (array_key_exists('CODIGO_COMERCIO', (array)$body)) {
                $comercial->CODIGO_COMERCIO =  $body->CODIGO_COMERCIO;
            }
            if (array_key_exists('NOMBRE_COMERCIAL', (array)$body)) {
                $comercial->NOMBRE_COMERCIAL =  $body->NOMBRE_COMERCIAL;
            }
            if (array_key_exists('TELEFONO_COMERCIAL', (array)$body)) {
                $comercial->TELEFONO_COMERCIAL =  $body->TELEFONO_COMERCIAL;
            }

            return array(
                'done' => $this->comercialDao->save($comercial)
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
        $comercial = $this->comercialDao->findById($id);

        if (!$comercial) {
            return [
                'done' => false
            ];
        }

        try {
            return array("done" => $this->comercialDao->delete($comercial));
        } catch (\Exception $e) {
            return array(
                'done' => false,
                'err' => $e->getMessage(),
            );
        }
    }
}
