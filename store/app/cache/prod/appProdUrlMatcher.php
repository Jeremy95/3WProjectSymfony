<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // store_backend_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'store_backend_homepage')), array (  '_controller' => 'Store\\BackendBundle\\Controller\\DefaultController::indexAction',));
        }

        // store_backend_index
        if (0 === strpos($pathinfo, '/dashboard') && preg_match('#^/dashboard(?:/(?P<name>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'store_backend_index')), array (  '_controller' => 'Store\\BackendBundle\\Controller\\MainController::indexAction',  'name' => NULL,));
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
            if (0 === strpos($pathinfo, '/products/view') && preg_match('#^/products/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'store_backend_product_view')), array (  '_controller' => 'Store\\BackendBundle\\Controller\\ProductController::viewAction',));
            }

        }

        if (0 === strpos($pathinfo, '/categories')) {
            // store_backend_category_list
            if ($pathinfo === '/categories/list') {
                return array (  '_controller' => 'Store\\BackendBundle\\Controller\\CategoryController::listAction',  '_route' => 'store_backend_category_list',);
            }

            // store_backend_category_view
            if (0 === strpos($pathinfo, '/categories/view') && preg_match('#^/categories/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'store_backend_category_view')), array (  '_controller' => 'Store\\BackendBundle\\Controller\\CategoryController::viewAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
