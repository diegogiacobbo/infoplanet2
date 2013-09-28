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
                    $insert = $stmt->prepare(
                            "INSERT INTO contato set
                        contato = :contato,
                        email = :email,
                        data = now()
                    	,nome = :nome"
                    );
                    $bol = $insert->execute(array(
                        ':contato' => $contato->getContato(),
                        ':email' => $contato->getEmail(),
                        ':nome' => $contato->getNome()
                            ));

                    $bol = true;
                    if ($bol) {


//                        subject
                       $subject = 'Mensagem automática de www.mercadodesabores.com.br';                    	
                    	
                    	$message = \Swift_Message::newInstance()
                    	->setSubject($subject)
                    	->setFrom($contato->getEmail())
                    	->setTo('diego@desenhandoweb.com.br')
                    	->setBody("Você recebeu um contato de um possível cliente em www.mercadodesabores.com.br: \"".$contato->getContato()."\""
//                     			$this->renderView(
//                     					'HelloBundle:Hello:email.txt.twig',
//                     					array('name' => $contato->getNome(), 'contato' => $contato->getContato())
//                     			)
                    	);
                    	$this->get('mailer')->send($message);

                    	$subject = 'Resposta automática de www.mercadodesabores.com.br';
                    	 
                    	$message2 = \Swift_Message::newInstance()
                    	->setSubject($subject)
                    	->setFrom('contato@mercadodesabores.com.br')
                    	->setTo($contato->getEmail())
                    	->setBody("Obrigado por nos contatar. \n\r Está é uma mensagem automática, não responda este e-mail, em breve estaremos lhe retornando!");
                    	$this->get('mailer')->send($message2);
                    	
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
