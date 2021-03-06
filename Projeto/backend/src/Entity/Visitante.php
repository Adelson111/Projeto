<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VisitanteRepository")
 */
class Visitante implements \JsonSerializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $senha;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $foto;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Sugestao", mappedBy="Visitante")
     */
    private $sugestaos;

    public function __construct()
    {
        $this->sugestaos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSenha(): ?string
    {
        return $this->senha;
    }

    public function setSenha(string $senha): self
    {
        $this->senha = $senha;

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }
    public function jsonSerialize()
    {
        return ['id'=>$this->getId(),'nome'=>$this->getNome(), 'foto'=>$this->getFoto(),'senha'=>$this->getSenha()];
    }

    /**
     * @return Collection|Sugestao[]
     */
    public function getSugestaos(): Collection
    {
        return $this->sugestaos;
    }

    public function addSugestao(Sugestao $sugestao): self
    {
        if (!$this->sugestaos->contains($sugestao)) {
            $this->sugestaos[] = $sugestao;
            $sugestao->addVisitante($this);
        }

        return $this;
    }

    public function removeSugestao(Sugestao $sugestao): self
    {
        if ($this->sugestaos->contains($sugestao)) {
            $this->sugestaos->removeElement($sugestao);
            $sugestao->removeVisitante($this);
        }

        return $this;
    }
}
