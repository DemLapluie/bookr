<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */
class Client
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Le nom est obligatoire")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Le prénom est obligatoire")
     */
    private $prenom;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="La date de naissance est obligatoire")
     * @Assert\Date(message="La date doit etre format dd-mm-yyyy")
     */
    private $date_de_naissance;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="L'adresse est obligatoire")
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=5)
     * @Assert\NotBlank(message="Le code postale est obligatoire")
     * @Assert\Length(min="5", max="5", exactMessage="Le code postale ne doit pas dépasser {{ limit }} caractères")
     * @Assert\Type(type="integer", message="Le code postale doit contenir uniquement des chiffres")
     */
    private $cp;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="La ville est obligatoire")
     *
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="L'email est obligatoire")
     * @Assert\Email(message="L'email n'est pas valide")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=45)
     *
     */
    private $mdp;


    /**
     * Mot de passe en clair pour interagir avec le formulaire
     * @var string
     * @assert\NotBlank(message="Le mot de passe est obligatoire")
     */
    private $plainPassword;

    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank(message="L'email est obligatoire")
     * @Assert\Length(min="10", max="10", exactMessage="Le numero de telephone doit contenir {{ limit }} de caractères ")
     * @Assert\Type(type="integer", message="Le N° de téléphone doit contenir uniquement des chiffres")
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=45)
     *
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="L'email est obligatoire")
     * @Assert\Choice({"Mme", "M."})
     */
    private $civilite;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     * @Assert\Image(maxSize="2M", maxSizeMessage="Le fichier ne doit pas faire plus de 2Mo",
     * mimeTypesMessage="Le fichier doit être une image")
     */
    private $avatar;

    /**
     * @ORM\Column(type="text", nullable=true)
     *
     */
    private $description;

<<<<<<< HEAD
    /**
     * Mot de passe en clair pour interagir avec le formulaire
     * @var string
     * @Assert\NotBlank(message="Le mot de passe est obligatoire du cul")
     */
    private $plainPassword;
=======

>>>>>>> dev_ikir

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->date_de_naissance;
    }

    public function setDateDeNaissance(\DateTimeInterface $date_de_naissance): self
    {
        $this->date_de_naissance = $date_de_naissance;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

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

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getCivilite(): ?string
    {
        return $this->civilite;
    }

    public function setCivilite(string $civilite): self
    {
        $this->civilite = $civilite;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(string $avatar): self
    {
        $this->avatar = $avatar;

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
     * @return string
     */
    public function getPlainPassword(): string
    {
        return $this->plainPassword;
    }

    /**
     * @param string $plainPassword
     * @return Client
     */
    public function setPlainPassword(string $plainPassword): Client
    {
        $this->plainPassword = $plainPassword;
        return $this;
    }

<<<<<<< HEAD
    /**
     * @return string
     */
    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    /**
     * @param string $plainPassword
     * @return Client
     */
    public function setPlainPassword(string $plainPassword): Client
    {
        $this->plainPassword = $plainPassword;
        return $this;
    }
=======
>>>>>>> dev_ikir

}
