<?php 

namespace AiMi\Controller;
use AiMi\Bbdd\ProductoDao;
use AiMi\Models\Producto;
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
}
