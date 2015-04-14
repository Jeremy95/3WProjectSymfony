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

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // store_backend_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'store_backend_homepage')), array (  '_controller' => 'Store\\BackendBundle\\Controller\\DefaultController::indexAction',));
        }

        // store_backend_index
        if ($pathinfo === '/dashboard') {
            return array (  '_controller' => 'Store\\BackendBundle\\Controller\\MainController::indexAction',  '_route' => 'store_backend_index',);
        }

        // store_backend_statics_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Store\\BackendBundle\\Controller\\StaticsController::contactAction',  '_route' => 'store_backend_statics_contact',);
        }

        // store_backend_statics_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Store\\BackendBundle\\Controller\\StaticsController::aboutAction',  '_route' => 'store_backend_statics_about',);
        }

        // store_backend_statics_terms
        if ($pathinfo === '/terms') {
            return array (  '_controller' => 'Store\\BackendBundle\\Controller\\StaticsController::termsAction',  '_route' => 'store_backend_statics_terms',);
        }

        // store_backend_statics_concept
        if ($pathinfo === '/concept') {
            return array (  '_controller' => 'Store\\BackendBundle\\Controller\\StaticsController::conceptAction',  '_route' => 'store_backend_statics_concept',);
        }

        if (0 === strpos($pathinfo, '/products')) {
            // store_backend_product_list
            if ($pathinfo === '/products/list') {
                return array (  '_controller' => 'Store\\BackendBundle\\Controller\\ProductController::listAction',  '_route' => 'store_backend_product_list',);
            }

            // store_backend_product_view
            if (0 === strpos($pathinfo, '/products/view') && preg_match('#^/products/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_store_backend_product_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'store_backend_product_view')), array (  '_controller' => 'Store\\BackendBundle\\Controller\\ProductController::viewAction',));
            }
            not_store_backend_product_view:

            // store_backend_product_remove
            if (0 === strpos($pathinfo, '/products/remove') && preg_match('#^/products/remove/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'store_backend_product_remove')), array (  '_controller' => 'Store\\BackendBundle\\Controller\\ProductController::removeAction',));
            }

            // store_backend_product_new
            if ($pathinfo === '/products/new') {
                return array (  '_controller' => 'Store\\BackendBundle\\Controller\\ProductController::newAction',  '_route' => 'store_backend_product_new',);
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/categories')) {
                // store_backend_category_list
                if ($pathinfo === '/categories/list') {
                    return array (  '_controller' => 'Store\\BackendBundle\\Controller\\CategoryController::listAction',  '_route' => 'store_backend_category_list',);
                }

                // store_backend_category_view
                if (0 === strpos($pathinfo, '/categories/view') && preg_match('#^/categories/view/(?P<id>\\d+)/(?P<name>[a-zA-Z0-9-]{3,30})$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_store_backend_category_view;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'store_backend_category_view')), array (  '_controller' => 'Store\\BackendBundle\\Controller\\CategoryController::viewAction',));
                }
                not_store_backend_category_view:

                // store_backend_category_remove
                if (0 === strpos($pathinfo, '/categories/remove') && preg_match('#^/categories/remove/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'store_backend_category_remove')), array (  '_controller' => 'Store\\BackendBundle\\Controller\\CategoryController::removeAction',));
                }

            }

            if (0 === strpos($pathinfo, '/cms')) {
                // store_backend_cms_list
                if ($pathinfo === '/cms/list') {
                    return array (  '_controller' => 'Store\\BackendBundle\\Controller\\CMSController::listAction',  '_route' => 'store_backend_cms_list',);
                }

                // store_backend_cms_view
                if (0 === strpos($pathinfo, '/cms/view') && preg_match('#^/cms/view/(?P<id>\\d+)/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_store_backend_cms_view;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'store_backend_cms_view')), array (  '_controller' => 'Store\\BackendBundle\\Controller\\CMSController::viewAction',));
                }
                not_store_backend_cms_view:

                // store_backend_cms_remove
                if (0 === strpos($pathinfo, '/cms/remove') && preg_match('#^/cms/remove/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'store_backend_cms_remove')), array (  '_controller' => 'Store\\BackendBundle\\Controller\\CMSController::removeAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/suppliers')) {
            // store_backend_supplier_list
            if ($pathinfo === '/suppliers/list') {
                return array (  '_controller' => 'Store\\BackendBundle\\Controller\\SupplierController::listAction',  '_route' => 'store_backend_supplier_list',);
            }

            // store_backend_supplier_view
            if (0 === strpos($pathinfo, '/suppliers/view') && preg_match('#^/suppliers/view/(?P<id>\\d+)/(?P<name>[a-zA-Z0-9-]{3,30})$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_store_backend_supplier_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'store_backend_supplier_view')), array (  '_controller' => 'Store\\BackendBundle\\Controller\\SupplierController::viewAction',));
            }
            not_store_backend_supplier_view:

            // store_backend_supplier_remove
            if (0 === strpos($pathinfo, '/suppliers/remove') && preg_match('#^/suppliers/remove/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'store_backend_supplier_remove')), array (  '_controller' => 'Store\\BackendBundle\\Controller\\SupplierController::removeAction',));
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
