<?php

namespace Gerenciador\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GerenciadorLoginBundle:Default:index.html.twig', array('name' => $name));
    }
}
