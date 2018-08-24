<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DisponibiliteRepository")
 */
class Disponibilite
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var Prestataire
     * @ORM\OneToOne(targetEntity="prestataire")
     * @ORM\JoinColumn(name="prestataire_id", referencedColumnName="id")
     */
    private $prestataire;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $lundi_ouverture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $lundi_Fermeture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $mardi_ouverture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $mardi_fermeture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $mercredi_ouverture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $mercredi_fermeture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $jeudi_ouverture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $jeudi_fermeture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $vendredi_ouverture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $vendredi_fermeture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $samedi_ouverture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $samedi_fermeture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $dimanche_ouverture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $dimanche_fermeture;

    public function getId(): ?int
    {
        return $this->id;
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
     * @return Disponibilite
     */
    public function setPrestataire(Prestataire $prestataire): Disponibilite
    {
        $this->prestataire = $prestataire;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLundiOuverture(): ?string
    {
        return $this->lundi_ouverture;
    }

    /**
     * @param mixed $lundi_ouverture
     * @return Disponibilite
     */
    public function setLundiOuverture($lundi_ouverture)
    {
        $this->lundi_ouverture = $lundi_ouverture;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLundiFermeture(): ?string
    {
        return $this->lundi_Fermeture;
    }

    /**
     * @param mixed $lundi_Fermeture
     * @return Disponibilite
     */
    public function setLundiFermeture($lundi_Fermeture)
    {
        $this->lundi_Fermeture = $lundi_Fermeture;
        return $this;
    }



    public function getMardiOuverture(): ?string
    {
        return $this->mardi_ouverture;
    }

    public function setMardiOuverture(?string $mardi_ouverture): self
    {
        $this->mardi_ouverture = $mardi_ouverture;

        return $this;
    }

    public function getMardiFermeture(): ?string
    {
        return $this->mardi_fermeture;
    }

    public function setMardiFermeture(?string $mardi_fermeture): self
    {
        $this->mardi_fermeture = $mardi_fermeture;

        return $this;
    }

    public function getMercrediOuverture(): ?string
    {
        return $this->mercredi_ouverture;
    }

    public function setMercrediOuverture(?string $mercredi_ouverture): self
    {
        $this->mercredi_ouverture = $mercredi_ouverture;

        return $this;
    }

    public function getMercrediFermeture(): ?string
    {
        return $this->mercredi_fermeture;
    }

    public function setMercrediFermeture(?string $mercredi_fermeture): self
    {
        $this->mercredi_fermeture = $mercredi_fermeture;

        return $this;
    }

    public function getJeudiOuverture(): ?string
    {
        return $this->jeudi_ouverture;
    }

    public function setJeudiOuverture(?string $jeudi_ouverture): self
    {
        $this->jeudi_ouverture = $jeudi_ouverture;

        return $this;
    }

    public function getJeudiFermeture(): ?string
    {
        return $this->jeudi_fermeture;
    }

    public function setJeudiFermeture(?string $jeudi_fermeture): self
    {
        $this->jeudi_fermeture = $jeudi_fermeture;

        return $this;
    }

    public function getVendrediOuverture(): ?string
    {
        return $this->vendredi_ouverture;
    }

    public function setVendrediOuverture(?string $vendredi_ouverture): self
    {
        $this->vendredi_ouverture = $vendredi_ouverture;

        return $this;
    }

    public function getVendrediFermeture(): ?string
    {
        return $this->vendredi_fermeture;
    }

    public function setVendrediFermeture(?string $vendredi_fermeture): self
    {
        $this->vendredi_fermeture = $vendredi_fermeture;

        return $this;
    }

    public function getSamediOuverture(): ?string
    {
        return $this->samedi_ouverture;
    }

    public function setSamediOuverture(?string $samedi_ouverture): self
    {
        $this->samedi_ouverture = $samedi_ouverture;

        return $this;
    }

    public function getSamediFermeture(): ?string
    {
        return $this->samedi_fermeture;
    }

    public function setSamediFermeture(?string $samedi_fermeture): self
    {
        $this->samedi_fermeture = $samedi_fermeture;

        return $this;
    }

    public function getDimancheOuverture(): ?string
    {
        return $this->dimanche_ouverture;
    }

    public function setDimancheOuverture(?string $dimanche_ouverture): self
    {
        $this->dimanche_ouverture = $dimanche_ouverture;

        return $this;
    }

    public function getDimancheFermeture(): ?string
    {
        return $this->dimanche_fermeture;
    }

    public function setDimancheFermeture(?string $dimanche_fermeture): self
    {
        $this->dimanche_fermeture = $dimanche_fermeture;

        return $this;
    }
}
