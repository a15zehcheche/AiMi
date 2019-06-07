<?php
namespace AiMi\Routes;

use Phroute\Phroute\RouteCollector;
use AiMi\Controller\ProductoManager;
use AiMi\Controller\CategoriaManager;
use AiMi\Controller\GeneroManager;

class ActionsRoutes
{
    public static function manageRoutes(RouteCollector $router)
    {
        $prefix = '';

        // -----------------------------------------------------------------
        // ---------------------------- ACTIONS ----------------------------
        // -----------------------------------------------------------------

        $router->get($prefix . '/productos', function () {
            return (new ProductoManager())->findAll();
        });
        $router->get($prefix . '/producto/{id}', function ($id) {
            return (new ProductoManager())->findById($id);
        });
        $router->post($prefix.'/producto',function(){
            $body = file_get_contents('php://input');
            $body = json_decode($body);
            return (new ProductoManager())->save($body);
        });


        $router->get($prefix . '/categorias', function () {
            return (new CategoriaManager())->findAll();
        });
        $router->get($prefix . '/generos', function () {
            return (new GeneroManager())->findAll();
        });

    }
}
?>