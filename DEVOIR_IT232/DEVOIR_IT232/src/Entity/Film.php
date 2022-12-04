<?php

namespace App\Entity;

use App\Repository\FilmRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FilmRepository::class)]
class Film extends Sauvegarde
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    protected $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nomFilm;

    #[ORM\Column(type: 'string', length: 255)]
    private $auteurFilm;

    #[ORM\Column(type: 'string', length: 255)]
    private $producteurFilm;

    #[ORM\Column(type: 'date')]
    private $dateDeProduction;

    #[ORM\Column(type: 'date')]
    private $dateDePublication;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFilm(): ?string
    {
        return $this->nomFilm;
    }

    public function setNomFilm(string $nomFilm): self
    {
        $this->nomFilm = $nomFilm;

        return $this;
    }

    public function getAuteurFilm(): ?string
    {
        return $this->auteurFilm;
    }

    public function setAuteurFilm(string $auteurFilm): self
    {
        $this->auteurFilm = $auteurFilm;

        return $this;
    }

    public function getProducteurFilm(): ?string
    {
        return $this->producteurFilm;
    }

    public function setProducteurFilm(string $producteurFilm): self
    {
        $this->producteurFilm = $producteurFilm;

        return $this;
    }

    public function getDateDeProduction(): ?\DateTimeInterface
    {
        return $this->dateDeProduction;
    }

    public function setDateDeProduction(?\DateTimeInterface $dateDeProduction): self
    {
        $this->dateDeProduction = $dateDeProduction;

        return $this;
    }

    public function getDateDePublication(): ?\DateTimeInterface
    {
        return $this->dateDePublication;
    }

    public function setDateDePublication(?\DateTimeInterface $dateDePublication): self
    {
        $this->dateDePublication = $dateDePublication;

        return $this;
    }
}
