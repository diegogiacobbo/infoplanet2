<?php

namespace Mercado\PaginaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario implements AdvancedUserInterface {

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
     * @ORM\Column(name="password", type="string", length=20, nullable=false)
     */
    private $password;
    
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
    public function getId() {
        return $this->id;
    }
    
    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }


    /**
     * Set username
     *
     * @param string $username
     * @return Usuario
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set dthInclusao
     *
     * @param string $dthInclusao
     * @return Usuario
     */
    public function setDthInclusao($dthInclusao) {
        $this->dthInclusao = $dthInclusao;

        return $this;
    }

    /**
     * Get dthInclusao
     *
     * @return string 
     */
    public function getDthInclusao() {
        return $this->dthInclusao;
    }

    /**
     * Set dthAlteracao
     *
     * @param string $dthAlteracao
     * @return Usuario
     */
    public function setDthAlteracao($dthAlteracao) {
        $this->dthAlteracao = $dthAlteracao;

        return $this;
    }

    /**
     * Get dthAlteracao
     *
     * @return string 
     */
    public function getDthAlteracao() {
        return $this->dthAlteracao;
    }

    /**
     * Set idTipoUsuario
     *
     * @param \Mercado\PaginaBundle\Entity\TipoUsuario $idTipoUsuario
     * @return Usuario
     */
    public function setIdTipoUsuario(\Mercado\PaginaBundle\Entity\TipoUsuario $idTipoUsuario = null) {
        $this->idTipoUsuario = $idTipoUsuario;

        return $this;
    }

    /**
     * Get idTipoUsuario
     *
     * @return \Mercado\PaginaBundle\Entity\TipoUsuario 
     */
    public function getIdTipoUsuario() {
        return $this->idTipoUsuario;
    }

    /**
     * Gets the user salt.
     *
     * @return string The salt.
     */
    public function getSalt() {
        $salt = "RJGL0VX857tr7wWps8V69reU";   // This salt can be anything you want but just remember the user is created with a salt, their password will be encrypted using it. 
        return $salt;    // So if this changes, then the user won't be able to log in. So make sure this value won't change for the user 
        // (I'm thinking about using the timestamp that the user signed up. Please let me know if that's a bad idea.)
    }

    public function getRoles() {
        $roles = array();
        foreach ($this->userRoles as $group) {
            $roles[] = new Rank($group->getRoleName(), $group->getRole());
        }
        //print_r($roles);
        return $roles;
    }
    
    
    
     /**
     * Erases the user credentials.
     */
    public function eraseCredentials()
    {
 
    }
    public function equals(UserInterface $user)
    {
        return md5($this->getUsername()) == md5($user->getUsername());
    }
   

    public function isAccountNonExpired() {
        return true;
    }

    public function isAccountNonLocked() {
        return true;
    }

    public function isCredentialsNonExpired() {
        return true;
    }

    public function isEnabled() {
        return true;
    }

}