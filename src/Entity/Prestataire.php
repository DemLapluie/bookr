<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\NotBlank(message="Le nom d'entreprise est obligatoire")
     */
    private $nom_entreprise;


    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="L' adresse est obligatoire")
     */
    private $adresse_entreprise;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="La ville est obligatoire")
     */
    private $ville_entreprise;

    /**
     * @ORM\Column(type="string", length=5)
     * @Assert\NotBlank(message="Le code postale est obligatoire")
     * @Assert\Length(min="5", max="5", exactMessage="Le code postale ne doit pas dépasser {{ limit }} caractères")
     * @Assert\Type(type="digit", message="Le code postale doit contenir uniquement des chiffres")
     */
    private $cp_entreprise;

    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank(message="Le numero de téléhone est obligatoire")
     * @Assert\Length(min="10", max="10", exactMessage="Le numero de telephone doit contenir {{ limit }} de caractères ")
     * @Assert\Type(type="digit", message="Le N° de téléphone doit contenir uniquement des chiffres")
     */
    private $tel_entreprise;

     /**
     * @ORM\Column(type="array")
     * @Assert\NotBlank(message="Le lieu de prestation est obligatoire")
     * @Assert\Choice({"Chez le client", "Chez le prestataire", "En salon/institut"}, multiple=true, min="1", minMessage="Veuillez faire au minimum 1 choix de lieu" )
     */
    private $lieu_prestation;

    /**
     * @ORM\Column(type="string", length=14)
     * @Assert\NotBlank(message="Le n° SIRET est obligatoire", groups={"registration"})
     * @Assert\Length(max="14", min="14", maxMessage="Le n° SIRET ne doit pas dépasser {{ limit }} caractères", groups={"registration"})
     * @Assert\Type(type="digit", message="Le N° de siret doit contenir uniquement des chiffres", groups={"registration"})
     *
     */
    private $numero_siret;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Choice({"Validé", "En attente", "Refusé"})
     */
    private $certification;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le fichier est obligatoire", groups={"registration"})
     * @Assert\File(maxSize="2M", mimeTypesMessage="Le fichier doit être une image", groups={"registration"})
     */
    private $cni;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description_entreprise;

    /**
     * @var Client
     * @ORM\OneToOne(targetEntity="Client", inversedBy="prestataire")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     *
     */
    private $client;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Image(maxSize="2M", maxSizeMessage="Le fichier ne doit pas faire plus de 2Mo",
     * mimeTypesMessage="Le fichier doit être une image")
     */
    private $avatar;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="Photos", mappedBy="prestataire")
     */
    private $photo;

    /**
     * @ORM\Column(type="array")
     * @Assert\NotBlank(message="La profession est obligatoire")
     */
    private $profession;

    /**
     * @ORM\Column(type="simple_array", nullable=true)
     * @Assert\NotBlank(message="Les jours de disponibilités sont obligatoires", groups={"registration"})
    */
    private $jour;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="Prestation", mappedBy="prestataire")
     */
    private $prestation;

    /**
     * @ORM\OneToOne(targetEntity="Horaires", inversedBy="prestataire", cascade={"persist"})
     * @ORM\JoinColumn(name="horaires_id", referencedColumnName="id")
     */
    private $horaires;

    /**
     * @return Collection
     */
    public function getPrestation(): Collection
    {
        return $this->prestation;
    }

    /**
     * @param Collection $prestation
     * @return Prestataire
     */
    public function setPrestation(Collection $prestation): Prestataire
    {
        $this->prestation = $prestation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHoraires()
    {
        return $this->horaires;
    }

    /**
     * @param mixed $horaires
     * @return Prestataire
     */
    public function setHoraires($horaires)
    {
        $this->horaires = $horaires;
        return $this;
    }

    public function __construct()
    {
        $this->photo = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNomEntreprise()
    {
        return $this->nom_entreprise;
    }

    /**
     * @param mixed $nom_entreprise
     * @return Prestataire
     */
    public function setNomEntreprise($nom_entreprise)
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



    public function getLieuPrestation(): ?array
    {
        return $this->lieu_prestation;
    }

    public function setLieuPrestation(?array $lieu_presttion): self
    {
        $this->lieu_prestation = $lieu_presttion;

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

    public function getCni()
    {
        return $this->cni;
    }

    public function setCni($cni): self
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

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param Client $client
     * @return Prestataire
     */
    public function setClient( $client): Prestataire
    {
        $this->client = $client;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getPhoto(): Collection
    {
        return $this->photo;
    }

    /**
     * @param Collection $photo
     * @return Prestataire
     */
    public function setPhoto(Collection $photo): Prestataire
    {
        $this->photo = $photo;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * @param mixed $profession
     * @return Prestataire
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param mixed $avatar
     * @return Prestataire
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * @param mixed $jour
     * @return Prestataire
     */
    public function setJour($jour)
    {
        $this->jour = $jour;
        return $this;
    }

    public function __toString()
    {
        return $this->nom_entreprise;
    }


}
