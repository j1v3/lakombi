<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'index' => true,
       'LaKombiMainBundle_home' => true,
       'LaKombiMainBundle_news' => true,
       'LaKombiMainBundle_about' => true,
       'LaKombiMainBundle_contact' => true,
       'lakombi_resources_default_index' => true,
       'test' => true,
       'user_show' => true,
       'user_add' => true,
       'user_edit' => true,
       'add_user_news' => true,
       '_sf2gencdt' => true,
       '_sf2gencdt_request' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getindexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'LaKombi\\MainBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getLaKombiMainBundle_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'LaKombi\\MainBundle\\Controller\\MainController::homeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/home',  ),));
    }

    private function getLaKombiMainBundle_newsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'LaKombi\\MainBundle\\Controller\\MainController::newsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/news',  ),));
    }

    private function getLaKombiMainBundle_aboutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'LaKombi\\MainBundle\\Controller\\MainController::aboutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/access',  ),));
    }

    private function getLaKombiMainBundle_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'LaKombi\\MainBundle\\Controller\\MainController::contactAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/contact',  ),));
    }

    private function getlakombi_resources_default_indexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'LaKombi\\ResourcesBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function gettestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'LaKombi\\UsersBundle\\Controller\\DefaultController::testAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/test/',  ),));
    }

    private function getuser_showRouteInfo()
    {
        return array(array (  0 => 'userId',), array (  '_controller' => 'LaKombi\\UsersBundle\\Controller\\UserDataController::userAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'userId',  ),  1 =>   array (    0 => 'text',    1 => '/user',  ),));
    }

    private function getuser_addRouteInfo()
    {
        return array(array (), array (  '_controller' => 'LaKombi\\UsersBundle\\Controller\\UserDataController::addUserAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/add-user',  ),));
    }

    private function getuser_editRouteInfo()
    {
        return array(array (  0 => 'userId',), array (  '_controller' => 'LaKombi\\UsersBundle\\Controller\\UserDataController::editUserAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'userId',  ),  1 =>   array (    0 => 'text',    1 => '/edit-user',  ),));
    }

    private function getadd_user_newsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'LaKombi\\UsersBundle\\Controller\\UserDataController::addUserNewsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/add-user/news',  ),));
    }

    private function get_sf2gencdtRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sf2gen\\Bundle\\ConsoleBundle\\Controller\\ConsoleController::toolbarAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_sf2gencdt/',  ),));
    }

    private function get_sf2gencdt_requestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sf2gen\\Bundle\\ConsoleBundle\\Controller\\ConsoleController::requestAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_sf2gencdt/request/',  ),));
    }
}
