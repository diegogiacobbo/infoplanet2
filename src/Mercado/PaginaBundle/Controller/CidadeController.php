<?php

namespace Mercado\PaginaBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Mercado\PaginaBundle\Entity\Cidade;

/**
 * Cidade controller.
 *
 */
class CidadeController extends Controller
{

    /**
     * Lists all Cidade entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MercadoPaginaBundle:Cidade')->findAll();

        return $this->render('MercadoPaginaBundle:Cidade:index.html.twig', array(
            'entities' => $entities,
        ));
    }
 /**
     * Finds and displays a Cidade entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MercadoPaginaBundle:Cidade')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cidade entity.');
        }

        return $this->render('MercadoPaginaBundle:Cidade:show.html.twig', array(
            'entity'      => $entity,
        ));
    }

}
