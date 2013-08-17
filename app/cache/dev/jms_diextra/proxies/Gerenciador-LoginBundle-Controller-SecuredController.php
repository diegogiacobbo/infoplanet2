<?php

namespace EnhancedProxy_53c2e1ec35c3c34850b1b7efe4059cd152085917\__CG__\Gerenciador\LoginBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class SecuredController extends \Gerenciador\LoginBundle\Controller\SecuredController
{
    private $__CGInterception__loader;

    public function helloadminAction($name)
    {
        $ref = new \ReflectionMethod('Gerenciador\\LoginBundle\\Controller\\SecuredController', 'helloadminAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($name));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($name), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}