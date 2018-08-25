<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PrestationRepository")
 */
class Prestation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le nom est obligatoire")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=5)
     * @Assert\NotBlank(message="Le prix est obligatoire")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     * @Assert\NotBlank(message="La duree est obligatoire")
     */
    private $duree;

    /**
     * @ORM\Column(type="string", length=45)
     * @Assert\NotBlank(message="La categorie est obligatoire")
     * @Assert\Choice({"Barbe", "Coiffure", "Regard", "Make-up", "Ongles"})
     */
    private $categorie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    private $description;

    /**
     * @var Prestataire
     * @ORM\ManyToOne(targetEntity="Prestataire",  inversedBy="prestation")
     * @ORM\JoinColumn(name="prestataire_id", referencedColumnName="id")
     */
    private $prestataire;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Prestataire
     */
    public function getPrestataire(): Prestataire
    {
        return $this->prestataire;
    }

    /**
     * @param Prestataire $prestataire
     * @return Prestation
     */
    public function setPrestataire(Prestataire $prestataire): Prestation
    {
        $this->prestataire = $prestataire;
        return $this;
    }

}
