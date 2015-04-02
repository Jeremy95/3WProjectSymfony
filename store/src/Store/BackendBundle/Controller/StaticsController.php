<?php

namespace Store\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class StaticsController
 * @package Store\BackendBundle\Controller
 */
class StaticsController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function contactAction()
    {
        return $this->render('StoreBackendBundle:Statics:contact.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function aboutAction()
    {
        return $this->render('StoreBackendBundle:Statics:about.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function termsAction()
    {
        return $this->render('StoreBackendBundle:Statics:terms.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function conceptAction()
    {
        return $this->render('StoreBackendBundle:Statics:concept.html.twig');
    }
}
