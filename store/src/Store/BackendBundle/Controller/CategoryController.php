<?php

namespace Store\BackendBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class CategoryController
 * @package Store\BackendBundle\Controller
 */
class CategoryController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction()
    {
        return $this->render('StoreBackendBundle:Category:list.html.twig');
    }

    /**
     * @param $id
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAction($id, $name)
    {
        return $this->render('StoreBackendBundle:Category:view.html.twig', array(
            'id' => $id,
            'name' => $name
        ));
    }

}
