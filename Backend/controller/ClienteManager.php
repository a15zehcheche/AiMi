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
        /*
        "CODIGO_CLIENTE": "123456789",
    "NOMBRE_CLIENTE": "VICTOR",
    "NOMBRE_CONTACTO": null,
    "TELEFONO_CONTACTO": null,
    "CIF_DNI_NIE": "",
    "DIRECCION": null,
    "CP": null,
    "CIUDAD": null,
    "PROVINCIA": null,
    "PAIS": null,
    "TELEFONO1": null,
    "TELEFONO2": null,
    "MOVIL": null,
    "FAX": null,
    "EMAIL": null,
    "DIRECCION_ENVIO": null,
    "CP_ENVIO": null,
    "CIUDAD_ENVIO": null,
    "PROVINCIA_ENVIO": null,
    "PAIS_ENVIO": null,
    "DESCUENTO_CLIENTE": null,
        */
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
            if (array_key_exists('TEXTO', (array)$body)) {
                $cliente->TEXTO =  $body->TEXTO;
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
