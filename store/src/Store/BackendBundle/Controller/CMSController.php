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
        $em = $this->getDoctrine()->getManager();

        $cms = $em->getRepository('StoreBackendBundle:Cms')->findAll();

        return $this->render('StoreBackendBundle:CMS:list.html.twig', array(
            'cms' => $cms
        ));
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $cms = $em->getRepository('StoreBackendBundle:Cms')->getCmsByUser(1);

        return $this->render('StoreBackendBundle:CMS:view.html.twig', array('cms'=>$cms));
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function removeAction($id)
    {

        $em = $this->getDoctrine()->getManager();

        $product = $em->getRepository('StoreBackendBundle:Cms')->find($id);

        $em->remove($product);
        $em->flush();

        return $this->redirectToRoute('store_backend_cms_list');

    }

}