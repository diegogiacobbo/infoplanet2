<?php

namespace Mercado\PaginaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estado
 *
 * @ORM\Table(name="empresa")
 * @ORM\Entity
 */
class Empresa {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="respostaAutomatica", type="string", nullable=true)
     */
    private $respostaAutomatica;

    /**
     * @var string
     *
     * @ORM\Column(name="infoEmpresa", type="string", nullable=true)
     */
    private $infoEmpresa;

    /**
     * @var integer
     *
     * @ORM\Column(name="infoEmp", type="integer", nullable=true)
     */
    private $infoEmp;

    /**
     * @var integer
     *
     * @ORM\Column(name="respAutomatica", type="integer", nullable=true)
     */
    private $respAutomatica;

    public function getRespostaAutomatica() {
        return $this->respostaAutomatica;
    }

    public function setRespostaAutomatica($respostaAutomatica) {
        $this->respostaAutomatica = $respostaAutomatica;
    }

    public function getInfoEmpresa() {
        return $this->infoEmpresa;
    }

    public function setInfoEmpresa($infoEmpresa) {
        $this->infoEmpresa = $infoEmpresa;
    }

    public function getInfoEmp() {
        return $this->infoEmp;
    }

    public function setInfoEmp($infoEmp) {
        $this->infoEmp = $infoEmp;
    }

    public function getSetRespAutomatica() {
        return $this->respAutomatica;
    }

    public function setRespAutomatica($respAutomatica) {
        $this->respAutomatica = $respAutomatica;
    }

}
