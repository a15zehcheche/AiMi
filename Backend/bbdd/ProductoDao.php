<?php

namespace AiMi\Bbdd;

use AiMi\Models\Producto;
use AiMi\Models\Categoria;
use AiMi\Models\Genero;
use AiMi\Controller\Logger;

class ProductoDao
{
    public function findAll()
    {
        //Logger::debug($this->computerProductos(Producto::all()[0]->tallas));

        return $this->computerProductos($this->setTallas(Producto::all()));
    }

    public function findById($id)
    {
        //Logger::debug(Producto::with('tallas')->find($id));
        return $this->computerProducto(Producto::with('tallas')->find($id));
    }

    public function save(Producto $producto)
    {
        return $producto->save();
    }

    public function delete($id)
    {
        return $this->findById($id)->delete();
    }
    public function computerProducto($producto)
    {
        $categorias = Categoria::all();
        $generos = Genero::all();
        if (!$producto) {
            return [
                'done' => false,
                'message' => 'producto no encontrado'
            ];
        }
        $searchedValue = $producto->ID_GENERO;
        foreach ($generos as $genero) {
            if ($genero->ID == $searchedValue) {
                $producto->ID_GENERO = $genero->TEXTO;
            }
        }
        $searchedValue = $producto->ID_CATEGORIA;
        foreach ($categorias as $categoria) {
            if ($categoria->ID == $searchedValue) {
                $producto->ID_CATEGORIA = $categoria->TEXTO;
            }
        }

        return $producto;
    }

    public function computerProductos($productos)
    {
        $categorias = Categoria::all();
        $generos = Genero::all();

        foreach ($productos as $producto) {
            $searchedValue = $producto->ID_GENERO;
            foreach ($generos as $genero) {
                if ($genero->ID == $searchedValue) {
                    $producto->ID_GENERO = $genero->TEXTO;
                }
            }
            $searchedValue = $producto->ID_CATEGORIA;
            foreach ($categorias as $categoria) {
                if ($categoria->ID == $searchedValue) {
                    $producto->ID_CATEGORIA = $categoria->TEXTO;
                }
            }
        }
        return $productos;
    }

    public function setTallas($productos)
    {
        foreach ($productos as $producto) {
            $producto->tallas = $producto->tallas;
        }
        return $productos;
    }
}
