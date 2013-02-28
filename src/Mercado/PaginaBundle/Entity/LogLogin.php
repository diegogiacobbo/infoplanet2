<?php

namespace Mercado\PaginaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogLogin
 *
 * @ORM\Table(name="log_login")
 * @ORM\Entity
 */
class LogLogin
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
     * @ORM\Column(name="data", type="string", length=45, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="id_sessao", type="string", length=45, nullable=true)
     */
    private $idSessao;

    /**
     * @var string
     *
     * @ORM\Column(name="data_logoff", type="string", length=45, nullable=true)
     */
    private $dataLogoff;

    /**
     * @var \Usuario
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="Identity")
     * @ORM\OneToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
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
     * @param string $data
     * @return LogLogin
     */
    public function setData($data)
    {
        $this->data = $data;
    
        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set idSessao
     *
     * @param string $idSessao
     * @return LogLogin
     */
    public function setIdSessao($idSessao)
    {
        $this->idSessao = $idSessao;
    
        return $this;
    }

    /**
     * Get idSessao
     *
     * @return string 
     */
    public function getIdSessao()
    {
        return $this->idSessao;
    }

    /**
     * Set dataLogoff
     *
     * @param string $dataLogoff
     * @return LogLogin
     */
    public function setDataLogoff($dataLogoff)
    {
        $this->dataLogoff = $dataLogoff;
    
        return $this;
    }

    /**
     * Get dataLogoff
     *
     * @return string 
     */
    public function getDataLogoff()
    {
        return $this->dataLogoff;
    }

    /**
     * Set usuario
     *
     * @param \Mercado\PaginaBundle\Entity\Usuario $usuario
     * @return LogLogin
     */
    public function setUsuario(\Mercado\PaginaBundle\Entity\Usuario $usuario)
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