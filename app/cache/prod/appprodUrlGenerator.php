<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'mercado_pagina_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mercado\\PaginaBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),),
        'MercadoPaginaBundle_contato' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mercado\\PaginaBundle\\Controller\\DefaultController::contatoAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contato',    ),  ),),
        'MercadoPaginaBundle_contato_send' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mercado\\PaginaBundle\\Controller\\DefaultController::contatoAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contato',    ),  ),),
        '_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gerenciador\\LoginBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),),
        '_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mercado\\PaginaBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),),
        '_admin_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gerenciador\\LoginBundle\\Controller\\SecuredController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login',    ),  ),),
        '_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gerenciador\\LoginBundle\\Controller\\SecuredController::securityCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login_check',    ),  ),),
        '_admin_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gerenciador\\LoginBundle\\Controller\\SecuredController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/logout',    ),  ),),
        'gerenciador_login_secured_hello' => array (  0 =>   array (  ),  1 =>   array (    'name' => 'World',    '_controller' => 'Gerenciador\\LoginBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/hello',    ),  ),),
        '_admin_secured_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Gerenciador\\LoginBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/admin/hello',    ),  ),),
        '_admin_secured_hello_admin' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Gerenciador\\LoginBundle\\Controller\\SecuredController::helloadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/admin/hello/admin',    ),  ),),
        'admin_cidade' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mercado\\PaginaBundle\\Controller\\CidadeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/cidade/',    ),  ),),
        'admin_cidade_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Mercado\\PaginaBundle\\Controller\\CidadeController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/cidade',    ),  ),),
        '_admin_city' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Mercado\\PaginaBundle\\Controller\\CidadeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/cidade',    ),  ),),
        'GerenciadorLoginBundle_admin_email_automatico' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gerenciador\\LoginBundle\\Controller\\DefaultController::emailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/email-automatico',    ),  ),),
        'GerenciadorLoginBundle_admin_email_automatico_send' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gerenciador\\LoginBundle\\Controller\\DefaultController::emailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/email-automatico',    ),  ),),
        'GerenciadorLoginBundle_info_empresa' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gerenciador\\LoginBundle\\Controller\\DefaultController::infoAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/info',    ),  ),),
        'GerenciadorLoginBundle_info_empresa_send' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gerenciador\\LoginBundle\\Controller\\DefaultController::infoAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/info',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
