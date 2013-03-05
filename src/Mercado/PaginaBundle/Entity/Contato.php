<?php

namespace Mercado\PaginaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contato
 *
 * @ORM\Table(name="contato")
 * @ORM\Entity
 */
class Contato
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="contato", type="string", length=45, nullable=false)
     */
    private $contato;
    
    public function getContato() {
        return $this->contato;
    }

    public function setContato($contato) {
        $this->contato = $contato;
    }

        /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="email_secundario", type="string", length=45, nullable=true)
     */
    private $emailSecundario;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone_residencial", type="string", length=45, nullable=true)
     */
    private $telefoneResidencial;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone_comercial", type="string", length=45, nullable=true)
     */
    private $telefoneComercial;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone_celular", type="string", length=45, nullable=true)
     */
    private $telefoneCelular;

    /**
     * @var string
     *
     * @ORM\Column(name="logradouro", type="string", length=45, nullable=true)
     */
    private $logradouro;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=45, nullable=true)
     */
    private $bairro;

    /**
     * @var \Usuario
     *
     * @ORM\Column(name="usuario_id", type="integer", nullable=true)
     */
    private $usuario;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     * @return Contato
     */
    public function setData($data)
    {
        $this->data = $data;
    
        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Contato
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set emailSecundario
     *
     * @param string $emailSecundario
     * @return Contato
     */
    public function setEmailSecundario($emailSecundario)
    {
        $this->emailSecundario = $emailSecundario;
    
        return $this;
    }

    /**
     * Get emailSecundario
     *
     * @return string 
     */
    public function getEmailSecundario()
    {
        return $this->emailSecundario;
    }

    /**
     * Set telefoneResidencial
     *
     * @param string $telefoneResidencial
     * @return Contato
     */
    public function setTelefoneResidencial($telefoneResidencial)
    {
        $this->telefoneResidencial = $telefoneResidencial;
    
        return $this;
    }

    /**
     * Get telefoneResidencial
     *
     * @return string 
     */
    public function getTelefoneResidencial()
    {
        return $this->telefoneResidencial;
    }

    /**
     * Set telefoneComercial
     *
     * @param string $telefoneComercial
     * @return Contato
     */
    public function setTelefoneComercial($telefoneComercial)
    {
        $this->telefoneComercial = $telefoneComercial;
    
        return $this;
    }

    /**
     * Get telefoneComercial
     *
     * @return string 
     */
    public function getTelefoneComercial()
    {
        return $this->telefoneComercial;
    }

    /**
     * Set telefoneCelular
     *
     * @param string $telefoneCelular
     * @return Contato
     */
    public function setTelefoneCelular($telefoneCelular)
    {
        $this->telefoneCelular = $telefoneCelular;
    
        return $this;
    }

    /**
     * Get telefoneCelular
     *
     * @return string 
     */
    public function getTelefoneCelular()
    {
        return $this->telefoneCelular;
    }

    /**
     * Set logradouro
     *
     * @param string $logradouro
     * @return Contato
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    
        return $this;
    }

    /**
     * Get logradouro
     *
     * @return string 
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return Contato
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set bairro
     *
     * @param string $bairro
     * @return Contato
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    
        return $this;
    }

    /**
     * Get bairro
     *
     * @return string 
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set usuario
     *
     * @param integer $usuario
     * @return Contato
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Mercado\PaginaBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}