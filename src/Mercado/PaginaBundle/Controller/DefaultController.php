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
                    $contato->setTelefoneResidencial($_POST["mercado_paginabundle_contatotype"]["telefoneResidencial"]);

                    $stmt = $this->get('database_connection');
                    $insert = $stmt->prepare(
                            "INSERT INTO contato set
                        contato = :contato,
                        email = :email,
                        data = now(),
                        telefone_residencial = :tel_contato"
                    );
                    $bol = $insert->execute(array(
                        ':contato' => $contato->getContato(),
                        ':email' => $contato->getEmail(),
                        ':tel_contato' => $contato->getTelefoneResidencial()
                            ));

                    if ($bol) {
//                        // multiple recipients
//                        $to = 'di@di.com' . ', '; // note the comma
//                        $to .= 'mercado@mercadodesabores.com.br';
//
//                        // subject
//                        $subject = 'Resposta automática de www.Mercadodesabores.com.br';
//
//                        // message
//                        $message = '
//                        <html>
//                        <head>
//                         <title>E-mail automático do site Mercadodesabores.com.br</title>
//                        </head>
//                        <body>
//                        <p>Sua mensagem foi recebida e logo entraremos em contato!</p>
//                        <table>
//                         <tr>
//                          <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
//                         </tr>
//                         <tr>
//                          <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
//                         </tr>
//                         <tr>
//                          <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
//                         </tr>
//                        </table>
//                        <p>Não responda este e-mail</p>
//                        </body>
//                        </html>
//                        ';
//
//                        /* Atenção se você pretende inserir numa variável uma mensagem html mais
//                          complexa do que essa sem precisar escapar os carateres
//                          necessários pode ser feito o uso da sintaxe heredoc, consulte tipos-string-sintaxe-heredoc */
//
//                        // To send HTML mail, the Content-type header must be set
//                        $headers = 'MIME-Version: 1.0' . "\r\n";
//                        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//
//                        // Additional headers
//                        $headers .= 'To: Mary <diegogiacobo@gmail.com>, Kelly <diego@desenhandoweb.com.br>' . "\r\n";
//                        $headers .= 'From: Birthday Reminder <diegogiacobbo@gmail.com>' . "\r\n";
//                        $headers .= 'Cc: camilabeatrici@gmail.com' . "\r\n";
//                        $headers .= 'Bcc: camila@desenhandoweb.com.br' . "\r\n";
//                        
                       
                     $to      = 'diegogiacobbo@gmail.com';
                        $subject = 'the subject';
                        $message = 'hello';
                        $headers = 'From: diegogiacobbo@gmail.com' . "\r\n" .
                            'Reply-To: webmaster@example.com' . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();
                        mail('diegogiacobbo@gmail.com', $subject, $message, $headers);

                    }
                }
                return $this->render('MercadoPaginaBundle:Default:contato.html.twig', array(
                            'form' => $form->createView(), 'result' => "Você enviou uma mensagem para contato@mercadodesabores.com.br, estaremos entrando em contato com você, em breve!"
                        ));
            }
        }

        return $this->render('MercadoPaginaBundle:Default:contato.html.twig', array(
                    'form' => $form->createView(), 'result' => null
                ));
    }

}
