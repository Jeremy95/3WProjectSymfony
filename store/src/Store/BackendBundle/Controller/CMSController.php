<?php

namespace Store\BackendBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class CMSController
 * @package Store\BackendBundle\Controller
 */
class CMSController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction()
    {
        return $this->render('StoreBackendBundle:CMS:list.html.twig');
    }

    /**
     * @param $id
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAction($id, $name)
    {
        return $this->render('StoreBackendBundle:CMS:view.html.twig', array(
            'id' => $id,
            'name' => $name
        ));
    }

}