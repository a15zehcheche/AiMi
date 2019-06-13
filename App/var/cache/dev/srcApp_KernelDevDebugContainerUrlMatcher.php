<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'app_web_login', '_controller' => 'App\\Controller\\WebController::login'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'app_web_index', '_controller' => 'App\\Controller\\WebController::index'], null, null, null, false, false, null]],
            '/afegirProtucte' => [[['_route' => 'app_web_afegirproducte', '_controller' => 'App\\Controller\\WebController::AfegirProducte'], null, null, null, false, false, null]],
            '/afegirCategoria' => [[['_route' => 'app_web_afegircategoria', '_controller' => 'App\\Controller\\WebController::AfegirCategoria'], null, null, null, false, false, null]],
            '/afegirComercial' => [[['_route' => 'app_web_afegircomercial', '_controller' => 'App\\Controller\\WebController::afegirComercial'], null, null, null, false, false, null]],
            '/afegirCliente' => [[['_route' => 'app_web_afegircliente', '_controller' => 'App\\Controller\\WebController::afegirCliente'], null, null, null, false, false, null]],
            '/crearFactura' => [[['_route' => 'app_web_crearfactura', '_controller' => 'App\\Controller\\WebController::crearFactura'], null, null, null, false, false, null]],
            '/crearDevolucion' => [[['_route' => 'app_web_creardevolucion', '_controller' => 'App\\Controller\\WebController::crearDevolucion'], null, null, null, false, false, null]],
            '/llistarCategoria' => [[['_route' => 'app_web_llistarcategoria', '_controller' => 'App\\Controller\\WebController::llistarCategoria'], null, null, null, false, false, null]],
            '/llistarProducte' => [[['_route' => 'app_web_llistarproducte', '_controller' => 'App\\Controller\\WebController::llistarProducte'], null, null, null, false, false, null]],
            '/llistarComercial' => [[['_route' => 'app_web_llistarcomercial', '_controller' => 'App\\Controller\\WebController::llistarComercial'], null, null, null, false, false, null]],
            '/llistarCliente' => [[['_route' => 'app_web_llistarcliente', '_controller' => 'App\\Controller\\WebController::llistarCliente'], null, null, null, false, false, null]],
            '/llistarFactura' => [[['_route' => 'app_web_llistarfactura', '_controller' => 'App\\Controller\\WebController::llistarFactura'], null, null, null, false, false, null]],
            '/llistarDevolucion' => [[['_route' => 'app_web_llistardevolucion', '_controller' => 'App\\Controller\\WebController::llistarDevolucion'], null, null, null, false, false, null]],
            '/aumentarStock' => [[['_route' => 'app_web_aumentarstock', '_controller' => 'App\\Controller\\WebController::aumentarStock'], null, null, null, false, false, null]],
            '/configuracion' => [[['_route' => 'app_web_configuracion', '_controller' => 'App\\Controller\\WebController::configuracion'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/downloadFactura/([^/]++)(*:194)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            194 => [[['_route' => 'app_web_downloadfactura', '_controller' => 'App\\Controller\\WebController::downloadFactura'], ['numFactura'], null, null, false, true, null]],
        ];
    }
}
