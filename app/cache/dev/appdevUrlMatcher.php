<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }
            return array (  '_controller' => 'LaKombi\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        // LaKombiMainBundle_home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'LaKombi\\MainBundle\\Controller\\MainController::homeAction',  '_route' => 'LaKombiMainBundle_home',);
        }

        // LaKombiMainBundle_news
        if ($pathinfo === '/news') {
            return array (  '_controller' => 'LaKombi\\MainBundle\\Controller\\MainController::newsAction',  '_route' => 'LaKombiMainBundle_news',);
        }

        // LaKombiMainBundle_about
        if ($pathinfo === '/access') {
            return array (  '_controller' => 'LaKombi\\MainBundle\\Controller\\MainController::aboutAction',  '_route' => 'LaKombiMainBundle_about',);
        }

        // LaKombiMainBundle_contact
        if ($pathinfo === '/contact') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_LaKombiMainBundle_contact;
            }
            return array (  '_controller' => 'LaKombi\\MainBundle\\Controller\\MainController::contactAction',  '_route' => 'LaKombiMainBundle_contact',);
        }
        not_LaKombiMainBundle_contact:

        // lakombi_resources_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'LaKombi\\ResourcesBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'lakombi_resources_default_index'));
        }

        // test
        if (rtrim($pathinfo, '/') === '/test') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'test');
            }
            return array (  '_controller' => 'LaKombi\\UsersBundle\\Controller\\DefaultController::testAction',  '_route' => 'test',);
        }

        // user_show
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<userId>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'LaKombi\\UsersBundle\\Controller\\UserDataController::userAction',)), array('_route' => 'user_show'));
        }

        // user_add
        if ($pathinfo === '/add-user') {
            return array (  '_controller' => 'LaKombi\\UsersBundle\\Controller\\UserDataController::addUserAction',  '_route' => 'user_add',);
        }

        // user_edit
        if (0 === strpos($pathinfo, '/edit-user') && preg_match('#^/edit\\-user/(?P<userId>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'LaKombi\\UsersBundle\\Controller\\UserDataController::editUserAction',)), array('_route' => 'user_edit'));
        }

        // add_user_news
        if ($pathinfo === '/add-user/news') {
            return array (  '_controller' => 'LaKombi\\UsersBundle\\Controller\\UserDataController::addUserNewsAction',  '_route' => 'add_user_news',);
        }

        if (0 === strpos($pathinfo, '/_sf2gencdt')) {
            // _sf2gencdt
            if (rtrim($pathinfo, '/') === '/_sf2gencdt') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_sf2gencdt');
                }
                return array (  '_controller' => 'Sf2gen\\Bundle\\ConsoleBundle\\Controller\\ConsoleController::toolbarAction',  '_route' => '_sf2gencdt',);
            }

            // _sf2gencdt_request
            if (rtrim($pathinfo, '/') === '/_sf2gencdt/request') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_sf2gencdt_request');
                }
                return array (  '_controller' => 'Sf2gen\\Bundle\\ConsoleBundle\\Controller\\ConsoleController::requestAction',  '_route' => '_sf2gencdt_request',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
