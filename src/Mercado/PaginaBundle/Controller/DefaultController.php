<?php

namespace Mercado\PaginaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MercadoPaginaBundle:Default:index.html.twig');
    }
}
