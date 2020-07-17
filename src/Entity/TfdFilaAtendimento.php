<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TfdFilaAtendimento
 *
 * @ORM\Table(name="tfd_fila_atendimento", indexes={@ORM\Index(name="FK_ag_fila_atendimento", columns={"CODIGO_ULTIMO_USUARIO"})})
 * @ORM\Entity
 */
class TfdFilaAtendimento
{
    /**
     * @var int
     *
     * @ORM\Column(name="CODIGO_FILA_ATENDIMENTO", type="integer", nullable=false, options={"comment"="Armazena as filas de atendimento no módulo de agendamento ambulatorial"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigoFilaAtendimento;

    /**
     * @var string
     *
     * @ORM\Column(name="NOME", type="string", length=200, nullable=false)
     */
    private $nome;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CODIGO_ULTIMO_USUARIO", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $codigoUltimoUsuario;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATAREG", type="datetime", nullable=true)
     */
    private $datareg;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ATIVO", type="integer", nullable=true, options={"default"="1"})
     */
    private $ativo = '1';

    /**
     * @return int
     */
    public function getCodigoFilaAtendimento(): int
    {
        return $this->codigoFilaAtendimento;
    }

    /**
     * @param int $codigoFilaAtendimento
     */
    public function setCodigoFilaAtendimento(int $codigoFilaAtendimento): void
    {
        $this->codigoFilaAtendimento = $codigoFilaAtendimento;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return int|null
     */
    public function getCodigoUltimoUsuario(): ?int
    {
        return $this->codigoUltimoUsuario;
    }

    /**
     * @param int|null $codigoUltimoUsuario
     */
    public function setCodigoUltimoUsuario(?int $codigoUltimoUsuario): void
    {
        $this->codigoUltimoUsuario = $codigoUltimoUsuario;
    }

    /**
     * @return \DateTime|null
     */
    public function getDatareg(): ?\DateTime
    {
        return $this->datareg;
    }

    /**
     * @param \DateTime|null $datareg
     */
    public function setDatareg(?\DateTime $datareg): void
    {
        $this->datareg = $datareg;
    }

    /**
     * @return int|null
     */
    public function getAtivo(): ?int
    {
        return $this->ativo;
    }

    /**
     * @param int|null $ativo
     */
    public function setAtivo(?int $ativo): void
    {
        $this->ativo = $ativo;
    }

    public function __toString() {
        return $this->nome;
    }


}
