<?php

namespace EnhancedProxy_169bb06018bcfe008c5e9ef162b64b6969cc4e56\__CG__\Gerenciador\LoginBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class DefaultController extends \Gerenciador\LoginBundle\Controller\DefaultController
{
    private $__CGInterception__loader;

    public function indexAction()
    {
        $ref = new \ReflectionMethod('Gerenciador\\LoginBundle\\Controller\\DefaultController', 'indexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}