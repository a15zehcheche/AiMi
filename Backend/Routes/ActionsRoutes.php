<?php
namespace AiMi\Routes;

use Phroute\Phroute\RouteCollector;
use AiMi\Controller\ProductoManager;

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

    }
}
?>