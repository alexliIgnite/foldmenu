<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

        if (0 === strpos($pathinfo, '/css/bootstrap')) {
            // _assetic_bootstrap_css
            if ($pathinfo === '/css/bootstrap.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css',);
            }

            if (0 === strpos($pathinfo, '/css/bootstrap_')) {
                // _assetic_bootstrap_css_0
                if ($pathinfo === '/css/bootstrap_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_0',);
                }

                // _assetic_bootstrap_css_1
                if ($pathinfo === '/css/bootstrap_form_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/bootstrap')) {
                // _assetic_bootstrap_js
                if ($pathinfo === '/js/bootstrap.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
                }

                if (0 === strpos($pathinfo, '/js/bootstrap_')) {
                    // _assetic_bootstrap_js_0
                    if ($pathinfo === '/js/bootstrap_transition_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
                    }

                    // _assetic_bootstrap_js_1
                    if ($pathinfo === '/js/bootstrap_alert_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_1',);
                    }

                    // _assetic_bootstrap_js_2
                    if ($pathinfo === '/js/bootstrap_button_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_2',);
                    }

                    if (0 === strpos($pathinfo, '/js/bootstrap_c')) {
                        // _assetic_bootstrap_js_3
                        if ($pathinfo === '/js/bootstrap_carousel_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_3',);
                        }

                        // _assetic_bootstrap_js_4
                        if ($pathinfo === '/js/bootstrap_collapse_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_4',);
                        }

                    }

                    // _assetic_bootstrap_js_5
                    if ($pathinfo === '/js/bootstrap_dropdown_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_5',);
                    }

                    // _assetic_bootstrap_js_6
                    if ($pathinfo === '/js/bootstrap_modal_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_6',);
                    }

                    // _assetic_bootstrap_js_7
                    if ($pathinfo === '/js/bootstrap_tooltip_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_7',);
                    }

                    // _assetic_bootstrap_js_8
                    if ($pathinfo === '/js/bootstrap_popover_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_8',);
                    }

                    // _assetic_bootstrap_js_9
                    if ($pathinfo === '/js/bootstrap_scrollspy_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_9',);
                    }

                    // _assetic_bootstrap_js_10
                    if ($pathinfo === '/js/bootstrap_tab_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_10',);
                    }

                    // _assetic_bootstrap_js_11
                    if ($pathinfo === '/js/bootstrap_affix_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_11',);
                    }

                    // _assetic_bootstrap_js_12
                    if ($pathinfo === '/js/bootstrap_bc-bootstrap-collection_13.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_12',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/jquery')) {
                // _assetic_jquery
                if ($pathinfo === '/js/jquery.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery',);
                }

                // _assetic_jquery_0
                if ($pathinfo === '/js/jquery_jquery-1.11.1_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/b853f74')) {
            // _assetic_b853f74
            if ($pathinfo === '/css/b853f74.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b853f74',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_b853f74',);
            }

            if (0 === strpos($pathinfo, '/css/b853f74_part_1_')) {
                // _assetic_b853f74_0
                if ($pathinfo === '/css/b853f74_part_1_ingredients_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b853f74',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_b853f74_0',);
                }

                // _assetic_b853f74_1
                if ($pathinfo === '/css/b853f74_part_1_main_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b853f74',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_b853f74_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/images/f24fdf6')) {
            // _assetic_f24fdf6
            if ($pathinfo === '/images/f24fdf6.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f24fdf6',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_f24fdf6',);
            }

            // _assetic_f24fdf6_0
            if ($pathinfo === '/images/f24fdf6_logoL_1.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f24fdf6',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_f24fdf6_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/da52006')) {
            // _assetic_da52006
            if ($pathinfo === '/js/da52006.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'da52006',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_da52006',);
            }

            // _assetic_da52006_0
            if ($pathinfo === '/js/da52006_animation_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'da52006',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_da52006_0',);
            }

        }

        if (0 === strpos($pathinfo, '/images')) {
            if (0 === strpos($pathinfo, '/images/3d83536')) {
                // _assetic_3d83536
                if ($pathinfo === '/images/3d83536.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3d83536',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_3d83536',);
                }

                // _assetic_3d83536_0
                if ($pathinfo === '/images/3d83536_logoWeb_1.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3d83536',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_3d83536_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/5f355d9')) {
                // _assetic_5f355d9
                if ($pathinfo === '/images/5f355d9.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5f355d9',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_5f355d9',);
                }

                // _assetic_5f355d9_0
                if ($pathinfo === '/images/5f355d9_igd_1.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5f355d9',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_5f355d9_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/700efb5')) {
                // _assetic_700efb5
                if ($pathinfo === '/js/700efb5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '700efb5',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_700efb5',);
                }

                if (0 === strpos($pathinfo, '/js/700efb5_part_1_')) {
                    // _assetic_700efb5_0
                    if ($pathinfo === '/js/700efb5_part_1_animation_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '700efb5',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_700efb5_0',);
                    }

                    // _assetic_700efb5_1
                    if ($pathinfo === '/js/700efb5_part_1_ingredients_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '700efb5',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_700efb5_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/66a5242')) {
                // _assetic_66a5242
                if ($pathinfo === '/js/66a5242.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '66a5242',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_66a5242',);
                }

                // _assetic_66a5242_0
                if ($pathinfo === '/js/66a5242_ingredients_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '66a5242',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_66a5242_0',);
                }

            }

        }

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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // appmain_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'appmain_homepage');
            }

            return array (  '_controller' => 'app\\mainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'appmain_homepage',);
        }

        // coreasset_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coreasset_homepage')), array (  '_controller' => 'core\\assetBundle\\Controller\\DefaultController::indexAction',));
        }

        // crawlSite
        if ($pathinfo === '/crawlSite') {
            return array (  '_controller' => 'app\\toolBundle\\Controller\\contentController::crawlSiteAction',  '_route' => 'crawlSite',);
        }

        if (0 === strpos($pathinfo, '/hello')) {
            // coreuser_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coreuser_homepage')), array (  '_controller' => 'core\\userBundle\\Controller\\DefaultController::indexAction',));
            }

            // coretool_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coretool_homepage')), array (  '_controller' => 'core\\toolBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
