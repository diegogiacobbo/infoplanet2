<?php

namespace Proxies\__CG__\Mercado\PaginaBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Empresa extends \Mercado\PaginaBundle\Entity\Empresa implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function getRespostaAutomatica()
    {
        $this->__load();
        return parent::getRespostaAutomatica();
    }

    public function setRespostaAutomatica($respostaAutomatica)
    {
        $this->__load();
        return parent::setRespostaAutomatica($respostaAutomatica);
    }

    public function getInfoEmpresa()
    {
        $this->__load();
        return parent::getInfoEmpresa();
    }

    public function setInfoEmpresa($infoEmpresa)
    {
        $this->__load();
        return parent::setInfoEmpresa($infoEmpresa);
    }

    public function getInfoEmp()
    {
        $this->__load();
        return parent::getInfoEmp();
    }

    public function setInfoEmp($infoEmp)
    {
        $this->__load();
        return parent::setInfoEmp($infoEmp);
    }

    public function getSetRespAutomatica()
    {
        $this->__load();
        return parent::getSetRespAutomatica();
    }

    public function setRespAutomatica($respAutomatica)
    {
        $this->__load();
        return parent::setRespAutomatica($respAutomatica);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}