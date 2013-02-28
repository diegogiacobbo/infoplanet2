<?php

namespace Mercado\PaginaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario
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
     * @ORM\Column(name="username", type="string", length=45, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="dth_inclusao", type="string", length=45, nullable=true)
     */
    private $dthInclusao;

    /**
     * @var string
     *
     * @ORM\Column(name="dth_alteracao", type="string", length=45, nullable=true)
     */
    private $dthAlteracao;

    /**
     * @var \TipoUsuario
     *
     * @ORM\ManyToOne(targetEntity="TipoUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_usuario", referencedColumnName="id")
     * })
     */
    private $idTipoUsuario;



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
     * Set username
     *
     * @param string $username
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set dthInclusao
     *
     * @param string $dthInclusao
     * @return Usuario
     */
    public function setDthInclusao($dthInclusao)
    {
        $this->dthInclusao = $dthInclusao;
    
        return $this;
    }

    /**
     * Get dthInclusao
     *
     * @return string 
     */
    public function getDthInclusao()
    {
        return $this->dthInclusao;
    }

    /**
     * Set dthAlteracao
     *
     * @param string $dthAlteracao
     * @return Usuario
     */
    public function setDthAlteracao($dthAlteracao)
    {
        $this->dthAlteracao = $dthAlteracao;
    
        return $this;
    }

    /**
     * Get dthAlteracao
     *
     * @return string 
     */
    public function getDthAlteracao()
    {
        return $this->dthAlteracao;
    }
    
    /**
     * Set idTipoUsuario
     *
     * @param \Mercado\PaginaBundle\Entity\TipoUsuario $idTipoUsuario
     * @return Usuario
     */
    public function setIdTipoUsuario(\Mercado\PaginaBundle\Entity\TipoUsuario $idTipoUsuario = null)
    {
        $this->idTipoUsuario = $idTipoUsuario;
    
        return $this;
    }

    /**
     * Get idTipoUsuario
     *
     * @return \Mercado\PaginaBundle\Entity\TipoUsuario 
     */
    public function getIdTipoUsuario()
    {
        return $this->idTipoUsuario;
    }
}