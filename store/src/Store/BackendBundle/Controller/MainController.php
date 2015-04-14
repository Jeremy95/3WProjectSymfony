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
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        $comment = $em->getRepository("StoreBackendBundle:Comment")->getCommentByUser(1);

        $nbprod = $em->getRepository("StoreBackendBundle:Product")->getCountByUser(1);

        $nbcat = $em->getRepository("StoreBackendBundle:Category")->getCountByUser(1);

        $nbsupp = $em->getRepository("StoreBackendBundle:Supplier")->getCountByUser(1);

        $nbcms = $em->getRepository("StoreBackendBundle:Cms")->getCountByUser(1);

        $nbcom = $em->getRepository("StoreBackendBundle:Comment")->getCountByUser(1);

        $nborders = $em->getRepository("StoreBackendBundle:Orders")->getCountByUser(1);

        $orders = $em->getRepository("StoreBackendBundle:Orders")->getOrderByUser(1);

        $cms = $em->getRepository("StoreBackendBundle:Cms")->getCmsByUser(1);

        $totalorder = $em->getRepository("StoreBackendBundle:Orders")->getTotalOrder(1);

        $getstock = $em->getRepository("StoreBackendBundle:Product")->isHaveStock();

        $ishasstock = true;

        if($getstock > 0)
        {
            $ishasstock = false;
        }


        return $this->render('StoreBackendBundle:Main:index.html.twig', array(
            'nbprod' => $nbprod,
            'comments' => $comment,
            'nbcat' => $nbcat,
            'nbsupp' => $nbsupp,
            'nbcms' => $nbcms,
            'nbcom' => $nbcom,
            'nborders' => $nborders,
            'orders' => $orders,
            'cms' => $cms,
            'totalorder' => $totalorder,
            'ishasstock' => $ishasstock,
            'getstock' => $getstock

        ));
    }
}
