<?php

//use eTorn\Controller\Logger;
//use eTorn\Routes\ActionsRoutes;
//use eTorn\Routes\ConfigRoutes;
//use eTorn\Routes\LayoutsRoutes;
//use eTorn\Routes\StoresRoutes;
//use eTorn\Routes\TestRoutes;
use Illuminate\Database\Capsule\Manager as Capsule;
use AiMi\Constants\ConstantsDB;
use AiMi\Routes\ActionsRoutes;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\Exception\HttpMethodNotAllowedException;
//use eTorn\Routes\RouterManager;

require(dirname(__FILE__) . '/vendor/autoload.php');
// ----------------------------------------------------------------------------------
// ------------------------------- ERRORS CONFIG ------------------------------------
// ----------------------------------------------------------------------------------
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Berlin');


// ----------------------------------------------------------------------------------
// ------------------------------- HEADERS CONFIG -----------------------------------
// ----------------------------------------------------------------------------------
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: false");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');

// ----------------------------------------------------------------------------------
// ------------------------------- ELOQUENT CONFIG ----------------------------------
// ----------------------------------------------------------------------------------

$capsule = new Capsule;

$capsule->addConnection([
    "driver"    => "mysql",
    "host"      => ConstantsDB::DB_SERVER,
    "database"  => ConstantsDB::DB_NAME,
    "username"  => ConstantsDB::DB_USER,
    "password"  => ConstantsDB::DB_PASSWD
]);

//Make this Capsule instance available globally.
$capsule->setAsGlobal();

// Setup the Eloquent ORM.
$capsule->bootEloquent();

// ----------------------------------------------------------------------------------
// ------------------------------- ROUTER CONFIG ------------------------------------
// ----------------------------------------------------------------------------------


$collector = new RouteCollector();

ActionsRoutes::manageRoutes($collector);

$despachador = new Dispatcher($collector->getData());
//$rutaCompleta = $_SERVER["REQUEST_URI"];
//$metodo = $_SERVER['REQUEST_METHOD'];
//$rutaLimpia = processInput($rutaCompleta);
try {
    $response = $despachador->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    # Mandar sólo el método y la ruta limpia
} catch (HttpRouteNotFoundException $e) {
    $response = "Error: Ruta no encontrada";
} catch (HttpMethodNotAllowedException $e) {
    $response = "Error: Ruta encontrada pero método no permitido";
}



// ----------------------------------------------------------------------------------
// ------------------------ CLOSING CONNECTION TO DATABASE --------------------------
// ----------------------------------------------------------------------------------
//$capsule->getDatabaseManager()->disconnect(ConstantsDB::DB_NAME);

// ----------------------------------------------------------------------------------
// ------------------------------------ RESPONSE ------------------------------------
// ----------------------------------------------------------------------------------

if (is_array($response) || is_object($response)) {
    header('Content-type: application/json; charset=utf-8');
    echo json_encode($response);
} else {
    header('Content-type: text/html; charset=utf-8');
    echo $response;
}


/*
echo "hello AiMi";
$loader = new \Twig\Loader\ArrayLoader([
    'index' => 'Hello {{ name }}!',
]);
$twig = new \Twig\Environment($loader);

echo $twig->render('index', ['name' => '    ']);
*/
