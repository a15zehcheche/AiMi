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
}
