<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SugestaoRepository")
 */
class Sugestao implements \JsonSerializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $sugestao;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Projeto", inversedBy="sugestoes")
     */
    private $projeto;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Visitante", inversedBy="sugestaos")
     */
    private $Visitante;

    public function __construct()
    {
        $this->Visitante = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSugestao(): ?string
    {
        return $this->sugestao;
    }

    public function setSugestao(string $sugestao): self
    {
        $this->sugestao = $sugestao;

        return $this;
    }

    public function getProjeto(): ?Projeto
    {
        return $this->projeto;
    }

    public function setProjeto(?Projeto $projeto): self
    {
        $this->projeto = $projeto;

        return $this;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return ['id'=>$this->getId(),'sugestao'=>$this->getSugestao(), 'projeto'=>$this->getProjeto()];
    }

    /**
     * @return Collection|Visitante[]
     */
    public function getVisitante(): Collection
    {
        return $this->Visitante;
    }

    public function addVisitante(Visitante $visitante): self
    {
        if (!$this->Visitante->contains($visitante)) {
            $this->Visitante[] = $visitante;
        }

        return $this;
    }

    public function removeVisitante(Visitante $visitante): self
    {
        if ($this->Visitante->contains($visitante)) {
            $this->Visitante->removeElement($visitante);
        }

        return $this;
    }
}
