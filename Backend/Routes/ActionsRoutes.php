<?php
namespace AiMi\Routes;

use AiMi\Controller\Logger;
use PhpParser\Node\Expr\BinaryOp\LogicalOr;
use Phroute\Phroute\RouteCollector;
use AiMi\Controller\ProductoManager;
use AiMi\Controller\CategoriaManager;
Use AiMi\Controller\ProductoTallaManager;
use AiMi\Controller\GeneroManager;
use AiMi\Controller\TallaManager;
use AiMi\Controller\ClienteManager;
use AiMi\Controller\ComercialManager;
use AiMi\Controller\UsuariManager;
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


        $router->get('/test',function (){
            $body = file_get_contents('php://input');
            $body = json_decode($body);
            return $body;
        });

        // -----------------------------------------------------------------
        // --------------------------- PRODUCTOS ---------------------------
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
        $router->put($prefix.'/producto/{id}',function($id){
            $body = file_get_contents('php://input');
            $body = json_decode($body);
            return (new ProductoManager())->update($body,$id);
        });
        $router->delete($prefix . '/producto/{id}', function ($id) {
            return (new ProductoManager())->delete($id);
        });
        $router->post($prefix.'/addProductosStock',function(){
            $body = file_get_contents('php://input');
            $body = json_decode($body);
            return (new ProductoManager())->addStock($body);
        });


        // -----------------------------------------------------------------
        // ------------------------ PRODUCTOS TALLA ------------------------
        // -----------------------------------------------------------------


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

        // -----------------------------------------------------------------
        // --------------------------- CATEGORIA ---------------------------
        // -----------------------------------------------------------------

        $router->get($prefix . '/categorias', function () {
            return (new CategoriaManager())->findAll();
        });
        $router->post($prefix . '/categoria', function () {
            $body = file_get_contents('php://input');
            $body = json_decode($body);
            return (new CategoriaManager())->save($body);
        });
        $router->put($prefix.'/categoria/{id}',function($id){
            $body = file_get_contents('php://input');
            $body = json_decode($body);
            return (new CategoriaManager())->update($body,$id);
        });
        $router->delete($prefix . '/categoria/{id}', function ($id) {
            return (new CategoriaManager())->delete($id);
        });

        // -----------------------------------------------------------------
        // ---------------------------- GENEROS ----------------------------
        // -----------------------------------------------------------------


        $router->get($prefix . '/generos', function () {
            return (new GeneroManager())->findAll();
        });
        $router->post($prefix . '/genero', function () {
            $body = file_get_contents('php://input');
            $body = json_decode($body);
            return (new GeneroManager())->save($body);
        });
        $router->put($prefix.'/genero/{id}',function($id){
            $body = file_get_contents('php://input');
            $body = json_decode($body);
            return (new GeneroManager())->update($body,$id);
        });
        $router->delete($prefix . '/genero/{id}', function ($id) {
            return (new GeneroManager())->delete($id);
        });


        // -----------------------------------------------------------------
        // ---------------------------- TALLAS -----------------------------
        // -----------------------------------------------------------------

        $router->get($prefix . '/tallas', function () {
            return (new TallaManager())->findAll();
        });
        $router->post($prefix . '/talla', function () {
            $body = file_get_contents('php://input');
            $body = json_decode($body);
            return (new TallaManager())->save($body);
        });
        $router->put($prefix.'/talla/{id}',function($id){
            $body = file_get_contents('php://input');
            $body = json_decode($body);
            return (new TallaManager())->update($body,$id);
        });
        $router->delete($prefix . '/talla/{id}', function ($id) {
            return (new TallaManager())->delete($id);
        });


        // -----------------------------------------------------------------
        // --------------------------- CLIENTES ----------------------------
        // -----------------------------------------------------------------
        $router->get($prefix . '/clientes', function () {
            return (new ClienteManager())->findAll();
        });
        $router->post($prefix . '/cliente', function () {
            $body = file_get_contents('php://input');
            $body = json_decode($body);
            return (new ClienteManager())->save($body);
        });
        $router->put($prefix.'/cliente/{id}',function($id){
            $body = file_get_contents('php://input');
            $body = json_decode($body);
            return (new ClienteManager())->update($body,$id);
        });
        $router->delete($prefix . '/cliente/{id}', function ($id) {
            return (new ClienteManager())->delete($id);
        });


        // -----------------------------------------------------------------
        // --------------------------- COMERCIALS --------------------------
        // -----------------------------------------------------------------
        $router->get($prefix . '/comercials', function () {
            return (new ComercialManager())->findAll();
        });
        $router->post($prefix . '/comercial', function () {
            $body = file_get_contents('php://input');
            $body = json_decode($body);
            return (new ComercialManager())->save($body);
        });
        $router->put($prefix.'/comercial/{id}',function($id){
            $body = file_get_contents('php://input');
            $body = json_decode($body);
            return (new ComercialManager())->update($body,$id);
        });
        $router->delete($prefix . '/comercial/{id}', function ($id) {
            return (new ComercialManager())->delete($id);
        });

        // -----------------------------------------------------------------
        // ----------------------------- USUARI ----------------------------
        // -----------------------------------------------------------------
        $router->get($prefix . '/usuaris', function () {
            return (new UsuariManager())->findAll();
        });
        $router->post($prefix . '/usuari', function () {
            $body = file_get_contents('php://input');
            $body = json_decode($body);
            if(isset($_FILES["photoUser"])){
                $imageFile = $_FILES['photoUser'];
            }else{
                $imageFile =null;
            }
            return (new UsuariManager())->save($body,$imageFile);
        });
        $router->put($prefix.'/usuari/{id}',function($id){
            $body = file_get_contents('php://input');
            $body = json_decode($body);
            return (new UsuariManager())->update($body,$id,null);
        });
        $router->post( '/usuariPhoto/{id}', function ($id) {
            Logger::debug("image update");
            Logger::debug($_FILES["photoProfile"]);
            return (new UsuariManager())->update(null,$id, $_FILES['photoProfile']);
        });
        $router->delete($prefix . '/usuari/{id}', function ($id) {
            return (new UsuariManager())->delete($id);
        });
        $router->post( '/actualUser', function () {
            $body = file_get_contents('php://input');
            $body = json_decode($body);
            return (new UsuariManager())->getActualUser($body);
        });

    }

    public static function sessionRoutes(RouteCollector $router){
        $router->post('/login', function () {
             $body = file_get_contents('php://input');
             $body = json_decode($body);
             return (new UsuariManager())->login($body);
        });
        $router->get( '/logout', function () {
            if(isset($_SESSION["USUARI_NOMBRE"]) && isset($_SESSION["PERMISO"])){
                unset($_SESSION["USUARI_NOMBRE"]);
                unset($_SESSION["PERMISO"]);
                header('Location: http://localhost:8000/login');
                return [
                    "done" => true
                ];
            }else{
                return [
                    "done" => false
                ];
            }
        });
    }
}
