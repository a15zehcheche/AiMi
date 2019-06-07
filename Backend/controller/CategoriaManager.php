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
}
