<?php 

namespace AiMi\Controller;
use AiMi\Bbdd\TallaDao;
use AiMi\Models\Talla;
class TallaManager
{
    public function __construct()
	{
		$this->tallaDao = new TallaDao();
	}

    public function findAll()
    {
        return $this->tallaDao->findAll();
    }
}
