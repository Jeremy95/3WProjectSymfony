<?php

namespace Store\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class MainController
 * @package Store\BackendBundle\Controller
 */
class MainController extends Controller
{
    /**
     * @param null $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($name = null)
    {
        return $this->render('StoreBackendBundle:Main:index.html.twig', array('name' => $name));
    }
}
