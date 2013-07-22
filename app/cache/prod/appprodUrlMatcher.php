<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // mercado_pagina_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mercado_pagina_homepage');
            }

            return array (  '_controller' => 'Mercado\\PaginaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mercado_pagina_homepage',);
        }

        // MercadoPaginaBundle_contato
        if ($pathinfo === '/contato') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_MercadoPaginaBundle_contato;
            }

            return array (  '_controller' => 'Mercado\\PaginaBundle\\Controller\\DefaultController::contatoAction',  '_route' => 'MercadoPaginaBundle_contato',);
        }
        not_MercadoPaginaBundle_contato:

        // MercadoPaginaBundle_contato_send
        if ($pathinfo === '/contato') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_MercadoPaginaBundle_contato_send;
            }

            return array (  '_controller' => 'Mercado\\PaginaBundle\\Controller\\DefaultController::contatoAction',  '_route' => 'MercadoPaginaBundle_contato_send',);
        }
        not_MercadoPaginaBundle_contato_send:

        // _admin
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_admin');
            }

            return array (  '_controller' => 'Gerenciador\\LoginBundle\\Controller\\DefaultController::indexAction',  '_route' => '_admin',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Mercado\\PaginaBundle\\Controller\\DefaultController::indexAction',  '_route' => '_welcome',);
        }

        // _admin_login
        if ($pathinfo === '/admin/login') {
            return array (  '_controller' => 'Gerenciador\\LoginBundle\\Controller\\SecuredController::loginAction',  '_route' => '_admin_login',);
        }

        // _security_check
        if ($pathinfo === '/admin/login_check') {
            return array (  '_controller' => 'Gerenciador\\LoginBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _admin_logout
        if ($pathinfo === '/admin/logout') {
            return array (  '_controller' => 'Gerenciador\\LoginBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_admin_logout',);
        }

        // gerenciador_login_secured_hello
        if ($pathinfo === '/admin/hello') {
            return array (  'name' => 'World',  '_controller' => 'Gerenciador\\LoginBundle\\Controller\\SecuredController::helloAction',  '_route' => 'gerenciador_login_secured_hello',);
        }

        // _admin_secured_hello
        if (0 === strpos($pathinfo, '/admin/hello') && preg_match('#^/admin/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gerenciador\\LoginBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_admin_secured_hello'));
        }

        // _admin_secured_hello_admin
        if (0 === strpos($pathinfo, '/admin/hello/admin') && preg_match('#^/admin/hello/admin/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Gerenciador\\LoginBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_admin_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/admin/cidade')) {
            // admin_cidade
            if (rtrim($pathinfo, '/') === '/admin/cidade') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_cidade');
                }

                return array (  '_controller' => 'Mercado\\PaginaBundle\\Controller\\CidadeController::indexAction',  '_route' => 'admin_cidade',);
            }

            // admin_cidade_show
            if (preg_match('#^/admin/cidade/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mercado\\PaginaBundle\\Controller\\CidadeController::showAction',)), array('_route' => 'admin_cidade_show'));
            }

        }

        // _admin_city
        if ($pathinfo === '/admin/cidade') {
            return array (  '_controller' => 'Mercado\\PaginaBundle\\Controller\\CidadeController::indexAction',  '_route' => '_admin_city',);
        }

        // GerenciadorLoginBundle_admin_email_automatico
        if ($pathinfo === '/admin/email-automatico') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_GerenciadorLoginBundle_admin_email_automatico;
            }

            return array (  '_controller' => 'Gerenciador\\LoginBundle\\Controller\\DefaultController::emailAction',  '_route' => 'GerenciadorLoginBundle_admin_email_automatico',);
        }
        not_GerenciadorLoginBundle_admin_email_automatico:

        // GerenciadorLoginBundle_admin_email_automatico_send
        if ($pathinfo === '/admin/email-automatico') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_GerenciadorLoginBundle_admin_email_automatico_send;
            }

            return array (  '_controller' => 'Gerenciador\\LoginBundle\\Controller\\DefaultController::emailAction',  '_route' => 'GerenciadorLoginBundle_admin_email_automatico_send',);
        }
        not_GerenciadorLoginBundle_admin_email_automatico_send:

        // GerenciadorLoginBundle_info_empresa
        if ($pathinfo === '/admin/info') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_GerenciadorLoginBundle_info_empresa;
            }

            return array (  '_controller' => 'Gerenciador\\LoginBundle\\Controller\\DefaultController::infoAction',  '_route' => 'GerenciadorLoginBundle_info_empresa',);
        }
        not_GerenciadorLoginBundle_info_empresa:

        // GerenciadorLoginBundle_info_empresa_send
        if ($pathinfo === '/admin/info') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_GerenciadorLoginBundle_info_empresa_send;
            }

            return array (  '_controller' => 'Gerenciador\\LoginBundle\\Controller\\DefaultController::infoAction',  '_route' => 'GerenciadorLoginBundle_info_empresa_send',);
        }
        not_GerenciadorLoginBundle_info_empresa_send:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
