<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'app_web_login' => [[], ['_controller' => 'App\\Controller\\WebController::login'], [], [['text', '/login']], [], []],
        'app_web_index' => [[], ['_controller' => 'App\\Controller\\WebController::index'], [], [['text', '/']], [], []],
        'app_web_afegirproducte' => [[], ['_controller' => 'App\\Controller\\WebController::AfegirProducte'], [], [['text', '/afegirProtucte']], [], []],
        'app_web_afegircategoria' => [[], ['_controller' => 'App\\Controller\\WebController::AfegirCategoria'], [], [['text', '/afegirCategoria']], [], []],
        'app_web_afegircomercial' => [[], ['_controller' => 'App\\Controller\\WebController::afegirComercial'], [], [['text', '/afegirComercial']], [], []],
        'app_web_afegircliente' => [[], ['_controller' => 'App\\Controller\\WebController::afegirCliente'], [], [['text', '/afegirCliente']], [], []],
        'app_web_crearfactura' => [[], ['_controller' => 'App\\Controller\\WebController::crearFactura'], [], [['text', '/crearFactura']], [], []],
        'app_web_creardevolucion' => [[], ['_controller' => 'App\\Controller\\WebController::crearDevolucion'], [], [['text', '/crearDevolucion']], [], []],
        'app_web_llistarcategoria' => [[], ['_controller' => 'App\\Controller\\WebController::llistarCategoria'], [], [['text', '/llistarCategoria']], [], []],
        'app_web_llistarproducte' => [[], ['_controller' => 'App\\Controller\\WebController::llistarProducte'], [], [['text', '/llistarProducte']], [], []],
        'app_web_llistarcomercial' => [[], ['_controller' => 'App\\Controller\\WebController::llistarComercial'], [], [['text', '/llistarComercial']], [], []],
        'app_web_llistarcliente' => [[], ['_controller' => 'App\\Controller\\WebController::llistarCliente'], [], [['text', '/llistarCliente']], [], []],
        'app_web_llistarfactura' => [[], ['_controller' => 'App\\Controller\\WebController::llistarFactura'], [], [['text', '/llistarFactura']], [], []],
        'app_web_llistardevolucion' => [[], ['_controller' => 'App\\Controller\\WebController::llistarDevolucion'], [], [['text', '/llistarDevolucion']], [], []],
        'app_web_downloadfactura' => [['numFactura'], ['_controller' => 'App\\Controller\\WebController::downloadFactura'], [], [['variable', '/', '[^/]++', 'numFactura', true], ['text', '/downloadFactura']], [], []],
        'app_web_aumentarstock' => [[], ['_controller' => 'App\\Controller\\WebController::aumentarStock'], [], [['text', '/aumentarStock']], [], []],
        'app_web_configuracion' => [[], ['_controller' => 'App\\Controller\\WebController::configuracion'], [], [['text', '/configuracion']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
