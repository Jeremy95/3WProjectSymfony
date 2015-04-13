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
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('StoreBackendBundle:Category')->findAll();


        return $this->render('StoreBackendBundle:Category:list.html.twig', array(
            'categories' => $categories
        ));
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $category = $em->getRepository('StoreBackendBundle:Category')->find($id);

        return $this->render('StoreBackendBundle:Category:view.html.twig', array('category'=>$category));
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function removeAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $product = $em->getRepository('StoreBackendBundle:Category')->find($id);

        $em->remove($product);
        $em->flush();

        return $this->redirectToRoute('store_backend_category_list');

    }

}
