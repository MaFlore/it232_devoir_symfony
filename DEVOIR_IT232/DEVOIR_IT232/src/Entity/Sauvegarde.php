<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class Sauvegarde
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    protected $id;

    #[ORM\Column(type: 'integer')]
    protected $creerPar;

    #[ORM\Column(type: 'date')]
    protected $creerLe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreerPar(): ?int
    {
        return $this->creerPar;
    }

    public function setCreerPar(int $creerPar): self
    {
        $this->creerPar = $creerPar;

        return $this;
    }

    public function getCreerLe(): ?\DateTimeInterface
    {
        return $this->creerLe;
    }

    public function setCreerLe(\DateTimeInterface $creerLe): self
    {
        $this->creerLe = $creerLe;

        return $this;
    }
}
