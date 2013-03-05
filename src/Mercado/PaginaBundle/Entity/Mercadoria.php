<?php

namespace Mercado\PaginaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mercadoria
 *
 * @ORM\Table(name="mercadoria")
 * @ORM\Entity
 */
class Mercadoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_produto", type="string", length=45, nullable=true)
     */
    private $codigoProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="unidade_medida", type="string", length=45, nullable=true)
     */
    private $unidadeMedida;

    /**
     * @var float
     *
     * @ORM\Column(name="quantidade", type="float", nullable=true)
     */
    private $quantidade;

    /**
     * @var integer
     *
     * @ORM\Column(name="itens_disponiveis", type="integer", nullable=true)
     */
    private $itensDisponiveis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dth_fabricacao", type="date", nullable=true)
     */
    private $dthFabricacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dth_validade", type="date", nullable=true)
     */
    private $dthValidade;

    /**
     * @var string
     *
     * @ORM\Column(name="unidade_monetaria", type="string", length=45, nullable=true)
     */
    private $unidadeMonetaria;

    /**
     * @var float
     *
     * @ORM\Column(name="preco", type="float", nullable=true)
     */
    private $preco;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user_inclusao", type="integer", nullable=true)
     */
    private $idUserInclusao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dth_inclusao", type="datetime", nullable=true)
     */
    private $dthInclusao;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user_alteracao", type="integer", nullable=true)
     */
    private $idUserAlteracao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dth_alteracao", type="datetime", nullable=true)
     */
    private $dthAlteracao;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cidade", type="integer", nullable=true)
     */
    private $idCidade;



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
     * Set nome
     *
     * @param string $nome
     * @return Mercadoria
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    
        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set codigoProduto
     *
     * @param string $codigoProduto
     * @return Mercadoria
     */
    public function setCodigoProduto($codigoProduto)
    {
        $this->codigoProduto = $codigoProduto;
    
        return $this;
    }

    /**
     * Get codigoProduto
     *
     * @return string 
     */
    public function getCodigoProduto()
    {
        return $this->codigoProduto;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return Mercadoria
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    
        return $this;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set unidadeMedida
     *
     * @param string $unidadeMedida
     * @return Mercadoria
     */
    public function setUnidadeMedida($unidadeMedida)
    {
        $this->unidadeMedida = $unidadeMedida;
    
        return $this;
    }

    /**
     * Get unidadeMedida
     *
     * @return string 
     */
    public function getUnidadeMedida()
    {
        return $this->unidadeMedida;
    }

    /**
     * Set quantidade
     *
     * @param float $quantidade
     * @return Mercadoria
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    
        return $this;
    }

    /**
     * Get quantidade
     *
     * @return float 
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set itensDisponiveis
     *
     * @param integer $itensDisponiveis
     * @return Mercadoria
     */
    public function setItensDisponiveis($itensDisponiveis)
    {
        $this->itensDisponiveis = $itensDisponiveis;
    
        return $this;
    }

    /**
     * Get itensDisponiveis
     *
     * @return integer 
     */
    public function getItensDisponiveis()
    {
        return $this->itensDisponiveis;
    }

    /**
     * Set dthFabricacao
     *
     * @param \DateTime $dthFabricacao
     * @return Mercadoria
     */
    public function setDthFabricacao($dthFabricacao)
    {
        $this->dthFabricacao = $dthFabricacao;
    
        return $this;
    }

    /**
     * Get dthFabricacao
     *
     * @return \DateTime 
     */
    public function getDthFabricacao()
    {
        return $this->dthFabricacao;
    }

    /**
     * Set dthValidade
     *
     * @param \DateTime $dthValidade
     * @return Mercadoria
     */
    public function setDthValidade($dthValidade)
    {
        $this->dthValidade = $dthValidade;
    
        return $this;
    }

    /**
     * Get dthValidade
     *
     * @return \DateTime 
     */
    public function getDthValidade()
    {
        return $this->dthValidade;
    }

    /**
     * Set unidadeMonetaria
     *
     * @param string $unidadeMonetaria
     * @return Mercadoria
     */
    public function setUnidadeMonetaria($unidadeMonetaria)
    {
        $this->unidadeMonetaria = $unidadeMonetaria;
    
        return $this;
    }

    /**
     * Get unidadeMonetaria
     *
     * @return string 
     */
    public function getUnidadeMonetaria()
    {
        return $this->unidadeMonetaria;
    }

    /**
     * Set preco
     *
     * @param float $preco
     * @return Mercadoria
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
    
        return $this;
    }

    /**
     * Get preco
     *
     * @return float 
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set idUserInclusao
     *
     * @param integer $idUserInclusao
     * @return Mercadoria
     */
    public function setIdUserInclusao($idUserInclusao)
    {
        $this->idUserInclusao = $idUserInclusao;
    
        return $this;
    }

    /**
     * Get idUserInclusao
     *
     * @return integer 
     */
    public function getIdUserInclusao()
    {
        return $this->idUserInclusao;
    }

    /**
     * Set dthInclusao
     *
     * @param \DateTime $dthInclusao
     * @return Mercadoria
     */
    public function setDthInclusao($dthInclusao)
    {
        $this->dthInclusao = $dthInclusao;
    
        return $this;
    }

    /**
     * Get dthInclusao
     *
     * @return \DateTime 
     */
    public function getDthInclusao()
    {
        return $this->dthInclusao;
    }

    /**
     * Set idUserAlteracao
     *
     * @param integer $idUserAlteracao
     * @return Mercadoria
     */
    public function setIdUserAlteracao($idUserAlteracao)
    {
        $this->idUserAlteracao = $idUserAlteracao;
    
        return $this;
    }

    /**
     * Get idUserAlteracao
     *
     * @return integer 
     */
    public function getIdUserAlteracao()
    {
        return $this->idUserAlteracao;
    }

    /**
     * Set dthAlteracao
     *
     * @param \DateTime $dthAlteracao
     * @return Mercadoria
     */
    public function setDthAlteracao($dthAlteracao)
    {
        $this->dthAlteracao = $dthAlteracao;
    
        return $this;
    }

    /**
     * Get dthAlteracao
     *
     * @return \DateTime 
     */
    public function getDthAlteracao()
    {
        return $this->dthAlteracao;
    }

    /**
     * Set idCidade
     *
     * @param integer $idCidade
     * @return Mercadoria
     */
    public function setIdCidade($idCidade)
    {
        $this->idCidade = $idCidade;
    
        return $this;
    }

    /**
     * Get idCidade
     *
     * @return integer 
     */
    public function getIdCidade()
    {
        return $this->idCidade;
    }
}