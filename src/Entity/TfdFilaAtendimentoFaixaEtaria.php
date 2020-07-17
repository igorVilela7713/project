<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TfdFilaAtendimentoFaixaEtaria
 *
 * @ORM\Table(name="tfd_fila_atendimento_faixa_etaria", uniqueConstraints={@ORM\UniqueConstraint(name="idx_faixa_etaria", columns={"CODIGO_FILA_ATENDIMENTO", "IDADE_INICIO", "IDADE_FIM"})}, indexes={@ORM\Index(name="IDX_500D5D09A6A973FA", columns={"CODIGO_FILA_ATENDIMENTO"})})
 * @ORM\Entity
 */
class TfdFilaAtendimentoFaixaEtaria
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false, options={"comment"="Identificador da fila"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDADE_INICIO", type="integer", nullable=true, options={"comment"="Idade de início da faixa etária"})
     */
    private $idadeInicio;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDADE_FIM", type="integer", nullable=true, options={"comment"="Idade de fim da faixa etária"})
     */
    private $idadeFim;

    /**
     * @var int|null
     *
     * @ORM\Column(name="QTD", type="integer", nullable=true)
     */
    private $qtd = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="UTILIZADO", type="integer", nullable=true)
     */
    private $utilizado = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ORDEM", type="integer", nullable=false, options={"default"="1"})
     */
    private $ordem = '1';

    /**
     * @var \TfdFilaAtendimento
     *
     * @ORM\ManyToOne(targetEntity="TfdFilaAtendimento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CODIGO_FILA_ATENDIMENTO", referencedColumnName="CODIGO_FILA_ATENDIMENTO")
     * })
     */
    private $codigoFilaAtendimento ;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getIdadeInicio(): ?int
    {
        return $this->idadeInicio;
    }

    /**
     * @param int|null $idadeInicio
     */
    public function setIdadeInicio(?int $idadeInicio): void
    {
        $this->idadeInicio = $idadeInicio;
    }

    /**
     * @return int|null
     */
    public function getIdadeFim(): ?int
    {
        return $this->idadeFim;
    }

    /**
     * @param int|null $idadeFim
     */
    public function setIdadeFim(?int $idadeFim): void
    {
        $this->idadeFim = $idadeFim;
    }

    /**
     * @return int|null
     */
    public function getQtd(): ?int
    {
        return $this->qtd;
    }

    /**
     * @param int|null $qtd
     */
    public function setQtd(?int $qtd): void
    {
        $this->qtd = $qtd;
    }

    /**
     * @return int|null
     */
    public function getUtilizado(): ?int
    {
        return $this->utilizado;
    }

    /**
     * @param int|null $utilizado
     */
    public function setUtilizado(?int $utilizado): void
    {
        $this->utilizado = $utilizado;
    }

    /**
     * @return int
     */
    public function getOrdem(): int
    {
        return $this->ordem;
    }

    /**
     * @param int $ordem
     */
    public function setOrdem(int $ordem): void
    {
        $this->ordem = $ordem;
    }

    /**
     * @return TfdFilaAtendimento
     */
    public function getCodigoFilaAtendimento()
    {
        return $this->codigoFilaAtendimento;

    }

    /**
     * @param \TfdFilaAtendimento $codigoFilaAtendimento
     */
    public function setCodigoFilaAtendimento(TfdFilaAtendimento $codigoFilaAtendimento)
    {
        $this->codigoFilaAtendimento = $codigoFilaAtendimento;
        return $this;
    }

    public function __toString() {
        return $this->id;
    }


}
