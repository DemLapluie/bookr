<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PrestataireRepository")
 */
class Prestataire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom_entreprise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_entreprise;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ville_entreprise;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $cp_entreprise;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $tel_entreprise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu_prestation;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $numero_siret;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $certification;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $cni;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $description_entreprise;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEntreprise(): ?string
    {
        return $this->nom_entreprise;
    }

    public function setNomEntreprise(string $nom_entreprise): self
    {
        $this->nom_entreprise = $nom_entreprise;

        return $this;
    }

    public function getAdresseEntreprise(): ?string
    {
        return $this->adresse_entreprise;
    }

    public function setAdresseEntreprise(string $adresse_entreprise): self
    {
        $this->adresse_entreprise = $adresse_entreprise;

        return $this;
    }

    public function getVilleEntreprise(): ?string
    {
        return $this->ville_entreprise;
    }

    public function setVilleEntreprise(string $ville_entreprise): self
    {
        $this->ville_entreprise = $ville_entreprise;

        return $this;
    }

    public function getCpEntreprise(): ?string
    {
        return $this->cp_entreprise;
    }

    public function setCpEntreprise(string $cp_entreprise): self
    {
        $this->cp_entreprise = $cp_entreprise;

        return $this;
    }

    public function getTelEntreprise(): ?string
    {
        return $this->tel_entreprise;
    }

    public function setTelEntreprise(string $tel_entreprise): self
    {
        $this->tel_entreprise = $tel_entreprise;

        return $this;
    }

    public function getLieuPresttion(): ?string
    {
        return $this->lieu_prestation;
    }

    public function setLieuPrestation(string $lieu_presttion): self
    {
        $this->lieu_presttion = $lieu_presttion;

        return $this;
    }

    public function getNumeroSiret(): ?string
    {
        return $this->numero_siret;
    }

    public function setNumeroSiret(string $numero_siret): self
    {
        $this->numero_siret = $numero_siret;

        return $this;
    }

    public function getCertification(): ?string
    {
        return $this->certification;
    }

    public function setCertification(string $certification): self
    {
        $this->certification = $certification;

        return $this;
    }

    public function getCni(): ?string
    {
        return $this->cni;
    }

    public function setCni(string $cni): self
    {
        $this->cni = $cni;

        return $this;
    }

    public function getDescriptionEntreprise(): ?string
    {
        return $this->description_entreprise;
    }

    public function setDescriptionEntreprise(?string $description_entreprise): self
    {
        $this->description_entreprise = $description_entreprise;

        return $this;
    }
}
