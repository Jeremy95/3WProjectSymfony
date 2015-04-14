<?php

namespace Store\BackendBundle\Controller;

use Store\BackendBundle\Form\ProductType;
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

        $actifproduct = $em->getRepository('StoreBackendBundle:Product')->getProductActif();

        $inactifproduct = $em->getRepository('StoreBackendBundle:Product')->getProductInactif();

        $coverproduct = $em->getRepository('StoreBackendBundle:Product')->getProductCover();


        return $this->render('StoreBackendBundle:Product:list.html.twig', array(
            'products' => $products,
            'actifproduct' => $actifproduct,
            'inactifproduct' => $inactifproduct,
            'coverproduct' => $coverproduct
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

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function newAction()
    {
        // je cree ici mon formulaire de produit
        $form = $this->createForm(new ProductType());


        return $this->render('StoreBackendBundle:Product:new.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
