<?php

namespace Store\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class ProductController
 * @package Store\BackendBundle\Controller
 */
class ProductController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('StoreBackendBundle:Product')->findAll();


        return $this->render('StoreBackendBundle:Product:list.html.twig', array(
            'products' => $products
        ));
    }

    /**
     * @param $id
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAction($id, $name)
    {
        return $this->render('StoreBackendBundle:Product:view.html.twig', array(
            'id' => $id,
            'name' => $name
        ));
    }
}
