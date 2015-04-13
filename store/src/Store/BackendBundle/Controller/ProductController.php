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
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $product = $em->getRepository('StoreBackendBundle:Product')->find($id);

        $meta = $em->getRepository('StoreBackendBundle:ProductMeta')->find($id);

        return $this->render('StoreBackendBundle:Product:view.html.twig', array('product'=>$product,'meta'=>$meta));
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function removeAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $product = $em->getRepository('StoreBackendBundle:Product')->find($id);

        $em->remove($product);
        $em->flush();

        return $this->redirectToRoute('store_backend_product_list');

    }
}
