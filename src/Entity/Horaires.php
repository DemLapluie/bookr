<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * @ORM\Entity(repositoryClass="App\Repository\HorairesRepository")
 */
class Horaires
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @var Prestataire
     * @ORM\OneToOne(targetEntity="prestataire", mappedBy="horaires")
     *
     */
    private $prestataire;
    /**
     * @ORM\Column(type="time", nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $lundi_ouverture;
    /**
     * @ORM\Column(type="time", nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $lundi_Fermeture;
    /**
     * @ORM\Column(type="time", nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $mardi_ouverture;
    /**
     * @ORM\Column(type="time", nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $mardi_fermeture;
    /**
     * @ORM\Column(type="time", nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $mercredi_ouverture;
    /**
     * @ORM\Column(type="time", nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $mercredi_fermeture;
    /**
     * @ORM\Column(type="time", nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $jeudi_ouverture;
    /**
     * @ORM\Column(type="time", nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $jeudi_fermeture;
    /**
     * @ORM\Column(type="time", nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $vendredi_ouverture;
    /**
     * @ORM\Column(type="time", nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $vendredi_fermeture;
    /**
     * @ORM\Column(type="time", nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $samedi_ouverture;
    /**
     * @ORM\Column(type="time", nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $samedi_fermeture;
    /**
     * @ORM\Column(type="time", nullable=true)
     * @Assert\Time(message="Le format de l'heure n'est pas respecté")
     */
    private $dimanche_ouverture;
    /**
     * @ORM\Column(type="time", nullable=true)
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
     * @return Horaires
     */
    public function setPrestataire(Prestataire $prestataire): Horaires
    {
        $this->prestataire = $prestataire;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getLundiOuverture()
    {
        return $this->lundi_ouverture;
    }
    /**
     * @param mixed $lundi_ouverture
     * @return Horaires
     */
    public function setLundiOuverture($lundi_ouverture)
    {
        $this->lundi_ouverture = $lundi_ouverture;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getLundiFermeture()
    {
        return $this->lundi_Fermeture;
    }
    /**
     * @param mixed $lundi_Fermeture
     * @return Horaires
     */
    public function setLundiFermeture($lundi_Fermeture)
    {
        $this->lundi_Fermeture = $lundi_Fermeture;
        return $this;
    }
    public function getMardiOuverture()
    {
        return $this->mardi_ouverture;
    }
    public function setMardiOuverture($mardi_ouverture): self
    {
        $this->mardi_ouverture = $mardi_ouverture;
        return $this;
    }
    public function getMardiFermeture()
    {
        return $this->mardi_fermeture;
    }
    public function setMardiFermeture( $mardi_fermeture): self
    {
        $this->mardi_fermeture = $mardi_fermeture;
        return $this;
    }
    public function getMercrediOuverture()
    {
        return $this->mercredi_ouverture;
    }
    public function setMercrediOuverture( $mercredi_ouverture): self
    {
        $this->mercredi_ouverture = $mercredi_ouverture;
        return $this;
    }
    public function getMercrediFermeture()
    {
        return $this->mercredi_fermeture;
    }
    public function setMercrediFermeture($mercredi_fermeture): self
    {
        $this->mercredi_fermeture = $mercredi_fermeture;
        return $this;
    }
    public function getJeudiOuverture()
    {
        return $this->jeudi_ouverture;
    }
    public function setJeudiOuverture( $jeudi_ouverture): self
    {
        $this->jeudi_ouverture = $jeudi_ouverture;
        return $this;
    }
    public function getJeudiFermeture()
    {
        return $this->jeudi_fermeture;
    }
    public function setJeudiFermeture( $jeudi_fermeture): self
    {
        $this->jeudi_fermeture = $jeudi_fermeture;
        return $this;
    }
    public function getVendrediOuverture()
    {
        return $this->vendredi_ouverture;
    }
    public function setVendrediOuverture( $vendredi_ouverture): self
    {
        $this->vendredi_ouverture = $vendredi_ouverture;
        return $this;
    }
    public function getVendrediFermeture()
    {
        return $this->vendredi_fermeture;
    }
    public function setVendrediFermeture( $vendredi_fermeture): self
    {
        $this->vendredi_fermeture = $vendredi_fermeture;
        return $this;
    }
    public function getSamediOuverture()
    {
        return $this->samedi_ouverture;
    }
    public function setSamediOuverture( $samedi_ouverture): self
    {
        $this->samedi_ouverture = $samedi_ouverture;
        return $this;
    }
    public function getSamediFermeture()
    {
        return $this->samedi_fermeture;
    }
    public function setSamediFermeture( $samedi_fermeture): self
    {
        $this->samedi_fermeture = $samedi_fermeture;
        return $this;
    }
    public function getDimancheOuverture()
    {
        return $this->dimanche_ouverture;
    }
    public function setDimancheOuverture($dimanche_ouverture): self
    {
        $this->dimanche_ouverture = $dimanche_ouverture;
        return $this;
    }
    public function getDimancheFermeture()
    {
        return $this->dimanche_fermeture;
    }
    public function setDimancheFermeture($dimanche_fermeture): self
    {
        $this->dimanche_fermeture = $dimanche_fermeture;
        return $this;
    }
}