<?php

namespace AiMi\Controller;

use AiMi\Bbdd\ProductoDao;
use AiMi\Models\Producto;
use AiMi\Models\Genero;
use AiMi\Models\Categoria;
use AiMi\Bbdd\CategoriaDao;
use AiMi\Bbdd\GeneroDao;

class ProductoManager
{
    public function __construct()
    {
        $this->productoDao = new ProductoDao();
    }

    public function findAll()
    {
        return $this->productoDao->findAll();
    }
    public function findById($id)
    {
        return $this->productoDao->findById($id);
    }
    public function save($body)
    {
        $producto = new Producto();
        try {

            if (!$body) {
                return [
                    'done' => false
                ];
            }

            if (array_key_exists('CODIGO_BARRA', (array)$body)) {
                $producto->CODIGO_BARRA = $body->CODIGO_BARRA;
            } else {
                return [
                    'done' => false,
                    'message' => 'Require CODIGO_BARRA.'
                ];
            }
            if (array_key_exists('CODIGO_PRODUCTO', (array)$body)) {
                $producto->CODIGO_PRODUCTO = $body->CODIGO_PRODUCTO;
            }
            if (array_key_exists('DESCRIPCION', (array)$body)) {
                $producto->DESCRIPCION = $body->DESCRIPCION;
            }
            if (array_key_exists('PRECIO_COMPRA', (array)$body)) {
                $producto->PRECIO_COMPRA = $body->PRECIO_COMPRA;
            }
            if (array_key_exists('PVP', (array)$body)) {
                $producto->PVP = $body->PVP;
            }
            if (array_key_exists('CANTIDAD_PACK', (array)$body)) {
                $producto->CANTIDAD_PACK = $body->CANTIDAD_PACK;
            }
            if (array_key_exists('STOCK', (array)$body)) {
                $producto->STOCK = $body->STOCK;
            } else {
                $producto->STOCK = 0;
            }
            if (array_key_exists('AVISO_STOCK', (array)$body)) {
                $producto->AVISO_STOCK = $body->AVISO_STOCK;
            }
            if (array_key_exists('config', (array)$body)) {
                $producto->config = $body->config;
            }
            if (array_key_exists('ID_GENERO', (array)$body)) {
                if (!GeneroDao::findById($body->ID_GENERO)) {
                    return [
                        'done' => false,
                        'message' => 'id genero no escontrado!'
                    ];
                }
                $producto->ID_GENERO = $body->ID_GENERO;
            }
            if (array_key_exists('ID_CATEGORIA', (array)$body)) {
                if (!GeneroDao::findById($body->ID_CATEGORIA)) {
                    return [
                        'done' => false,
                        'message' => 'id categoria no escontrado!'
                    ];
                }
                $producto->ID_CATEGORIA = $body->ID_CATEGORIA;
            }

            return array(
                'done' => $this->productoDao->save($producto)
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
        $producto = Producto::find($id);

        if (!$producto) {
            return [
                'done' => false
            ];
        }

        try {

            if (array_key_exists('CODIGO_BARRA', (array)$body)) {
                $producto->CODIGO_BARRA = $body->CODIGO_BARRA;
            }
            if (array_key_exists('CODIGO_PRODUCTO', (array)$body)) {
                $producto->CODIGO_PRODUCTO = $body->CODIGO_PRODUCTO;
            }
            if (array_key_exists('DESCRIPCION', (array)$body)) {
                $producto->DESCRIPCION = $body->DESCRIPCION;
            }
            if (array_key_exists('PRECIO_COMPRA', (array)$body)) {
                $producto->PRECIO_COMPRA = $body->PRECIO_COMPRA;
            }
            if (array_key_exists('PVP', (array)$body)) {
                $producto->PVP = $body->PVP;
            }
            if (array_key_exists('CANTIDAD_PACK', (array)$body)) {
                $producto->CANTIDAD_PACK = $body->CANTIDAD_PACK;
            }
            if (array_key_exists('STOCK', (array)$body)) {
                $producto->STOCK = $body->STOCK;
            } else {
                $producto->STOCK = 0;
            }
            if (array_key_exists('AVISO_STOCK', (array)$body)) {
                $producto->AVISO_STOCK = $body->AVISO_STOCK;
            }
            if (array_key_exists('config', (array)$body)) {
                $producto->config = $body->config;
            }
            if (array_key_exists('ID_GENERO', (array)$body)) {
                if (!Genero::find($body->ID_GENERO)) {
                    return [
                        'done' => false,
                        'message' => 'id genero no escontrado!'
                    ];
                } else {
                    $producto->ID_GENERO = $body->ID_GENERO;
                }
            }
            if (array_key_exists('ID_CATEGORIA', (array)$body)) {
                if (!Categoria::find($body->ID_CATEGORIA)) {
                    return [
                        'done' => false,
                        'message' => 'id categoria no escontrado!'
                    ];
                }
                $producto->ID_CATEGORIA = $body->ID_CATEGORIA;
            }

            return array(
                'done' => $this->productoDao->save($producto)
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
        $producto = $this->productoDao->findById($id);

        if (!$producto) {
            return [
                'done' => false
            ];
        }

        return array("done" => $this->productoDao->delete($producto));
    }

    public function addStock($body)
    {
        $result = [];
        $decode = $body->decode; /*=  '{
            "CODIGO_BARRA":"codigo_barra",
            "STOCK":"nombre_producto"
        }';*/

        //$decode = json_decode($decode);
        $productos = $body->productos; /* = '[{"codigo_barra":123151241234,"nombre_producto": 100},
        {"codigo_barra":32452341123,"nombre_producto": 100}]';*/

        //$productos = json_decode($productos);
        foreach ($productos as &$producto) {
            $myKey = $decode->CODIGO_BARRA;
            $productoFinded = Producto::where('CODIGO_BARRA', '=', $producto->$myKey)->first();

            if ($productoFinded) {
                $myKey = $decode->STOCK;
                $productoFinded->STOCK += $producto->$myKey;
            }

            $myKey = $decode->CODIGO_BARRA;
            try {
                if ($productoFinded) {
                    array_push($result, array(
                        'producto' => $producto->$myKey,
                        'done' => $productoFinded->save()
                    ));
                }else{
                    array_push($result,  array(
                        'producto' => $producto->$myKey,
                        'done' => false
                    ));
                }
            } catch (\Exception $e) {
                array_push($result,  array(
                    'producto' => $producto->$myKey,
                    'done' => false,
                    'err' => $e->getMessage(),
                ));
            }
        }
        return $result;
    }
}
