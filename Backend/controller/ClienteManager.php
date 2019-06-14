<?php

namespace AiMi\Controller;

use AiMi\Bbdd\ClienteDao;
use AiMi\Models\Cliente;

class ClienteManager
{
    public function __construct()
    {
        $this->clienteDao = new ClienteDao();
    }

    public function findAll()
    {
        return $this->clienteDao->findAll();
    }

    public function save($body)
    {

        try {
            $cliente = new Cliente();
            $cliente->CODIGO_CLIENTE =  $body->CODIGO_CLIENTE;
            $cliente->NOMBRE_CLIENTE =  $body->NOMBRE_CLIENTE;
            $cliente->NOMBRE_CONTACTO =  $body->NOMBRE_CONTACTO;
            $cliente->TELEFONO_CONTACTO =  $body->TELEFONO_CONTACTO;
            $cliente->CIF_DNI_NIE =  $body->CIF_DNI_NIE;
            $cliente->DIRECCION =  $body->DIRECCION;
            $cliente->CP =  $body->CP;
            $cliente->CIUDAD =  $body->CIUDAD;
            $cliente->PROVINCIA =  $body->PROVINCIA;
            $cliente->PAIS =  $body->PAIS;
            $cliente->TELEFONO1 =  $body->TELEFONO1;
            $cliente->TELEFONO2 =  $body->TELEFONO2;
            $cliente->MOVIL =  $body->MOVIL;
            $cliente->FAX =  $body->FAX;
            $cliente->EMAIL =  $body->EMAIL;
            $cliente->DIRECCION_ENVIO =  $body->DIRECCION_ENVIO;
            $cliente->CP_ENVIO =  $body->CP_ENVIO;
            $cliente->CIUDAD_ENVIO =  $body->CIUDAD_ENVIO;
            $cliente->PROVINCIA_ENVIO =  $body->PROVINCIA_ENVIO;  
            $cliente->PAIS_ENVIO =  $body->PAIS_ENVIO;       
            $cliente->DESCUENTO_CLIENTE =  $body->DESCUENTO_CLIENTE;
            return array(
                'done' => $this->clienteDao->save($cliente)
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
        $cliente = Cliente::find($id);

        if (!$cliente) {
            return [
                'done' => false
            ];
        }
        try {
            if (array_key_exists('CODIGO_CLIENTE', (array)$body)) {
                $cliente->CODIGO_CLIENTE =  $body->CODIGO_CLIENTE;
            }
            if (array_key_exists('NOMBRE_CLIENTE', (array)$body)) {
                $cliente->NOMBRE_CLIENTE =  $body->NOMBRE_CLIENTE;
            }
            if (array_key_exists('NOMBRE_CONTACTO', (array)$body)) {
                $cliente->NOMBRE_CONTACTO =  $body->NOMBRE_CONTACTO;
            }
            if (array_key_exists('TELEFONO_CONTACTO', (array)$body)) {
                $cliente->TELEFONO_CONTACTO =  $body->TELEFONO_CONTACTO;
            }
            if (array_key_exists('CIF_DNI_NIE', (array)$body)) {
                $cliente->CIF_DNI_NIE =  $body->CIF_DNI_NIE;
            }
            if (array_key_exists('DIRECCION', (array)$body)) {
                $cliente->DIRECCION =  $body->DIRECCION;
            }
            if (array_key_exists('CP', (array)$body)) {
                $cliente->CP =  $body->CP;
            }
            if (array_key_exists('CIUDAD', (array)$body)) {
                $cliente->CIUDAD =  $body->CIUDAD;
            }
            if (array_key_exists('PROVINCIA', (array)$body)) {
                $cliente->PROVINCIA =  $body->PROVINCIA;
            }
            if (array_key_exists('TELEFONO1', (array)$body)) {
                $cliente->TELEFONO1 =  $body->TELEFONO1;
            }
            if (array_key_exists('TELEFONO2', (array)$body)) {
                $cliente->TELEFONO2 =  $body->TELEFONO2;
            }
            if (array_key_exists('MOVIL', (array)$body)) {
                $cliente->MOVIL =  $body->MOVIL;
            }
            if (array_key_exists('FAX', (array)$body)) {
                $cliente->FAX =  $body->FAX;
            }
            if (array_key_exists('EMAIL', (array)$body)) {
                $cliente->EMAIL =  $body->EMAIL;
            }
            if (array_key_exists('DIRECCION_ENVIO', (array)$body)) {
                $cliente->DIRECCION_ENVIO =  $body->DIRECCION_ENVIO;
            }
            if (array_key_exists('CP_ENVIO', (array)$body)) {
                $cliente->CP_ENVIO =  $body->CP_ENVIO;
            }
            if (array_key_exists('CIUDAD_ENVIO', (array)$body)) {
                $cliente->CIUDAD_ENVIO =  $body->CIUDAD_ENVIO;
            }
            if (array_key_exists('PROVINCIA_ENVIO', (array)$body)) {
                $cliente->PROVINCIA_ENVIO =  $body->PROVINCIA_ENVIO;
            }
            if (array_key_exists('DESCUENTO_CLIENTE', (array)$body)) {
                $cliente->DESCUENTO_CLIENTE =  $body->DESCUENTO_CLIENTE;
            }
            return array(
                'done' => $this->clienteDao->save($cliente)
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
        $cliente = $this->clienteDao->findById($id);

        if (!$cliente) {
            return [
                'done' => false
            ];
        }

        try {
            return array("done" => $this->clienteDao->delete($cliente));
        } catch (\Exception $e) {
            return array(
                'done' => false,
                'err' => $e->getMessage(),
            );
        }
    }
}
