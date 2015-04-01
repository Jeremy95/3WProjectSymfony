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
     * Dashboard page on Backend
     */
    public function indexAction($name)
    {
        return $this->render('StoreBackendBundle:Main:index.html.twig', array('name' => $name));
    }
}
