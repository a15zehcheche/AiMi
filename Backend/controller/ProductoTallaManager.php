<?php 

namespace AiMi\Controller;
use AiMi\Bbdd\ProductoTallaDao;
use AiMi\Models\ProductoTalla;
class ProductoTallaManager
{
    public function __construct()
	{
		$this->productoTallaDao = new ProductoTallaDao();
	}

    public function findAll()
    {
        return $this->productoTallaDao->findAll();
    }
    public function findById($idP,$idT)
    {
        return $this->productoTallaDao->findById($idP,$idT);
    }
    public function save($body){
        try {
            $productoTalla = new ProductoTalla();
		
            $productoTalla->ID_PRODUCTO = $body->ID_PRODUCTO;
            $productoTalla->ID_TALLA =  $body->ID_TALLA;
            return array(
				'done' => $this->productoTallaDao->save($productoTalla)
			);
		} catch (\Exception $e) {
			return array(
			    'done' => false,
				'err' => $e->getMessage(),
			);
		}
    }
    public function delete($idP,$idT)
    {
        return $this->productoTallaDao->delete($idP,$idT);
    }
}
