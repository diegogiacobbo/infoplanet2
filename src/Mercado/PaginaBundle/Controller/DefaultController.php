<?php

namespace Mercado\PaginaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Mercado\PaginaBundle\Entity\Contato;

class DefaultController extends Controller {

    public function indexAction() {
    	$contato = new Contato();
    	
    	$form = $this->createForm(new \Mercado\PaginaBundle\Form\ContatoType(), $contato);
    	$request = $this->getRequest();
    	 
    	
    	if ($request->getMethod() == 'POST') {
    		$form->bindRequest($request);    		
        }   	
    	
        return $this->render('MercadoPaginaBundle:Default:index.html.twig', array(
                    'form' => $form->createView(), 'result' => null
                ));
    }

    public function contatoAction() {
        $contato = new Contato();

        $form = $this->createForm(new \Mercado\PaginaBundle\Form\ContatoType(), $contato);
        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                // Perform some action, such as sending an email
                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page

                if ($_POST["mercado_paginabundle_contatotype"]["contato"]) {
                    $contato = new Contato();
                    $contato->setEmail($_POST["mercado_paginabundle_contatotype"]["email"]);
                    $contato->setContato($_POST["mercado_paginabundle_contatotype"]["contato"]);
                    $contato->setNome($_POST["mercado_paginabundle_contatotype"]["nome"]);

                    $stmt = $this->get('database_connection');
//                     $insert = $stmt->prepare(
//                             "INSERT INTO contato set
//                         contato = :contato,
//                         email = :email,
//                         data = now()
//                     	,nome = :nome"
//                     );
//                     $bol = $insert->execute(array(
//                         ':contato' => $contato->getContato(),
//                         ':email' => $contato->getEmail(),
//                         ':nome' => $contato->getNome()
//                             ));

                    $bol = true;
                    if ($bol) {


//                        subject
                       $subject = 'Resposta automática de www.mercadodesabores.com.br';

//                        message
//                        $message = '';

                    	
                    	
                    	$message = \Swift_Message::newInstance()
                    	->setSubject($subject)
                    	->setFrom($contato->getEmail())
                    	->setTo('diego@desenhandoweb.com.br')
                    	->setBody(
//                     			$this->renderView(
//                     					'HelloBundle:Hello:email.txt.twig',
//                     					array('name' => $contato->getNome(), 'contato' => $contato->getContato())
//                     			)
                    	);
                    	$this->get('mailer')->send($message);

                    }
                }
    				return $this->render('MercadoPaginaBundle:Default:index.html.twig', array(
    						'form' => $form->createView(), 'result' => "Você enviou uma mensagem para contato@mercadodesabores.com.br, estaremos entrando em contato com você, em breve!"
                        ));
            }
        }

        return $this->render('MercadoPaginaBundle:Default:index.html.twig', array(
                    'form' => $form->createView(), 'result' => null
                ));
    }

}
