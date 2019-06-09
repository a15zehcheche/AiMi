<?php
namespace AiMi\Routes;

use Phroute\Phroute\RouteCollector;
use AiMi\Controller\ProductoManager;
use AiMi\Controller\CategoriaManager;
Use AiMi\Controller\ProductoTallaManager;
use AiMi\Controller\GeneroManager;
use AiMi\Controller\TallaManager;
use AiMi\Constants\ConstantsDB;
class ActionsRoutes
{
    public static function manageRoutes(RouteCollector $router)
    {
        $prefix = '';

        // -----------------------------------------------------------------
        // ---------------------------- ACTIONS ----------------------------
        // -----------------------------------------------------------------

        $router->any($prefix . '/deploy', function () {

            $user = ConstantsDB::DB_USER;
            $password = ConstantsDB::DB_PASSWD;
            $host = ConstantsDB::DB_SERVER;

            $script_path = \getcwd() . '/scripts/aimi.sql';

            $command = "mysql --user={$user} --password='{$password}' "
                . "-h {$host} < {$script_path}";

            $output = shell_exec($command);

            return 'done ' . $output;
        });



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


        $router->get($prefix . '/productosTallas', function () {
            return (new ProductoTallaManager())->findAll();
        });
        $router->get($prefix . '/productoTalla/{idP}/{idT}', function ($idP,$idT) {
            return (new ProductoTallaManager())->findById($idP,$idT);
        });
        $router->post($prefix.'/productoAddTalla',function(){
            $body = file_get_contents('php://input');
            $body = json_decode($body);
            return (new ProductoTallaManager())->save($body);
        });
        $router->delete($prefix . "/productoTalla/{idP}/{idT}", function ($idP,$idT) {
            return (new ProductoTallaManager())->delete($idP,$idT);
        });


        $router->get($prefix . '/categorias', function () {
            return (new CategoriaManager())->findAll();
        });
        $router->post($prefix . '/categoria', function () {
            $body = file_get_contents('php://input');
            $body = json_decode($body);
            return (new CategoriaManager())->save($body);
        });
        $router->delete($prefix . '/categoria/{id}', function ($id) {
            return (new CategoriaManager())->delete($id);
        });
        

        
        $router->get($prefix . '/generos', function () {
            return (new GeneroManager())->findAll();
        });
        $router->post($prefix . '/genero', function () {
            $body = file_get_contents('php://input');
            $body = json_decode($body);
            return (new GeneroManager())->save($body);
        });
        $router->delete($prefix . '/genero/{id}', function ($id) {
            return (new GeneroManager())->delete($id);
        });
        

        $router->get($prefix . '/tallas', function () {
            return (new TallaManager())->findAll();
        });
    }
}
