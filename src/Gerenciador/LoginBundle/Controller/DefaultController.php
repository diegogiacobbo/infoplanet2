<?php

namespace Gerenciador\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mercado\PaginaBundle\Entity\Empresa;


class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('GerenciadorLoginBundle:Default:index.html.twig');
    }
    
    

    public function infoAction() {
        $empresa = new Empresa();

        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {
            // Perform some action, such as sending an email
            // Redirect - This is important to prevent users re-posting
            // the form if they refresh the page


            $em = $this->getDoctrine()->getEntityManager();
            $query = $em->createQuery(
                            'SELECT e FROM MercadoPaginaBundle:Empresa e WHERE e.id = :id'
                    )->setParameter('id', '1');

            $empresa = $query->getResult();

            var_dump($empresa);


            $empresa->setInfoEmpresa($_POST['content']);

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($empresa);
            $em->flush();
            return $this->render('GerenciadorLoginBundle:Default:info.html.twig', array(
                        'text' => 'text default', 'result' => "Você alterou as informações básicas, com sucesso!"
                    ));
        }

        return $this->render('GerenciadorLoginBundle:Default:info.html.twig', array(
                    'text' => 'text default', 'result' => null
                ));
    }
    
    public function emailAction() {
        $empresa = new Empresa();

        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {
            // Perform some action, such as sending an email
            // Redirect - This is important to prevent users re-posting
            // the form if they refresh the page


            $em = $this->getDoctrine()->getEntityManager();
            $query = $em->createQuery(
                            'SELECT e FROM MercadoPaginaBundle:Empresa e WHERE e.id = :id'
                    )->setParameter('id', '1');

            $empresa = $query->getResult();

            var_dump($empresa);


            $empresa->setInfoEmpresa($_POST['content']);

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($empresa);
            $em->flush();
            return $this->render('GerenciadorLoginBundle:Default:email.html.twig', array(
                        'text' => 'text default', 'result' => "Você alterou as informações básicas, com sucesso!"
                    ));
        }

        return $this->render('GerenciadorLoginBundle:Default:email.html.twig', array(
                    'text' => 'text default', 'result' => null
                ));
    }
    
}
