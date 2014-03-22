<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
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
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // common_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'common_homepage');
            }

            return array (  '_controller' => 'WebMeta\\CommonBundle\\Controller\\DefaultController::indexAction',  '_route' => 'common_homepage',);
        }

        // common_documentation
        if ($pathinfo === '/documentation') {
            return array (  '_controller' => 'WebMeta\\CommonBundle\\Controller\\DefaultController::documentationAction',  '_route' => 'common_documentation',);
        }

        // common_tutoriels
        if ($pathinfo === '/tutoriels') {
            return array (  '_controller' => 'WebMeta\\CommonBundle\\Controller\\DefaultController::tutorielsAction',  '_route' => 'common_tutoriels',);
        }

        // common_faq
        if ($pathinfo === '/faq') {
            return array (  '_controller' => 'WebMeta\\CommonBundle\\Controller\\DefaultController::faqAction',  '_route' => 'common_faq',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // common_contact
            if ($pathinfo === '/contact') {
                return array (  '_controller' => 'WebMeta\\CommonBundle\\Controller\\DefaultController::contactAction',  '_route' => 'common_contact',);
            }

            if (0 === strpos($pathinfo, '/creation-compte')) {
                // compte_creation
                if ($pathinfo === '/creation-compte') {
                    return array (  '_controller' => 'WebMeta\\CommonBundle\\Controller\\CompteController::creationAction',  '_route' => 'compte_creation',);
                }

                // compte_creation_validation
                if ($pathinfo === '/creation-compte-validation') {
                    return array (  '_controller' => 'WebMeta\\CommonBundle\\Controller\\CompteController::validationAction',  '_route' => 'compte_creation_validation',);
                }

            }

        }

        // compte_view
        if ($pathinfo === '/mon-compte') {
            return array (  '_controller' => 'WebMeta\\CommonBundle\\Controller\\CompteController::indexAction',  '_route' => 'compte_view',);
        }

        // page_view
        if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<nom_categorie>[^/]++)/(?P<id>[^/\\-]++)\\-(?P<url_alias>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_view')), array (  '_controller' => 'WebMeta\\CommonBundle\\Controller\\PageController::viewAction',));
        }

        if (0 === strpos($pathinfo, '/creation-page')) {
            // page_creation
            if ($pathinfo === '/creation-page') {
                return array (  '_controller' => 'WebMeta\\CommonBundle\\Controller\\PageController::creationAction',  '_route' => 'page_creation',);
            }

            // page_creation_validation
            if ($pathinfo === '/creation-page-validation') {
                return array (  '_controller' => 'WebMeta\\CommonBundle\\Controller\\PageController::validationAction',  '_route' => 'page_creation_validation',);
            }

        }

        // warbot_homepage
        if ($pathinfo === '/warbot') {
            return array (  '_controller' => 'WebMeta\\CommonBundle\\Controller\\WarbotController::indexAction',  '_route' => 'warbot_homepage',);
        }

        // metaciv_homepage
        if ($pathinfo === '/metaciv') {
            return array (  '_controller' => 'WebMeta\\CommonBundle\\Controller\\MetacivController::indexAction',  '_route' => 'metaciv_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
