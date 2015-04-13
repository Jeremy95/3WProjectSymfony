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
        $em = $this->getDoctrine()->getManager();

        $suppliers = $em->getRepository('StoreBackendBundle:Supplier')->getSuppliersByUser(1);

        return $this->render('StoreBackendBundle:Supplier:list.html.twig', array(
            'suppliers'=>$suppliers
        ));
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $supplier = $em->getRepository('StoreBackendBundle:Supplier')->find($id);

        return $this->render('StoreBackendBundle:Supplier:view.html.twig', array(
            'supplier' => $supplier
        ));
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function removeAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $product = $em->getRepository('StoreBackendBundle:Supplier')->find($id);

        $em->remove($product);
        $em->flush();

        return $this->redirectToRoute('store_backend_supplier_list');

    }

}