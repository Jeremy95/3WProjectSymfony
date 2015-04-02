<?php

namespace Store\BackendBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class SupplierController
 * @package Store\BackendBundle\Controller
 */
class SupplierController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction()
    {
        return $this->render('StoreBackendBundle:Supplier:list.html.twig');
    }

    /**
     * @param $id
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAction($id, $name)
    {
        return $this->render('StoreBackendBundle:Supplier:view.html.twig', array(
            'id' => $id,
            'name' => $name
        ));
    }

}