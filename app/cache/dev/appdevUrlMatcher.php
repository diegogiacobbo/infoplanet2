<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        // _demo
        if (rtrim($pathinfo, '/') === '/demo') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_demo');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
        }

        // _demo_hello
        if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
        }

        // _demo_contact
        if ($pathinfo === '/demo/contact') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

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
