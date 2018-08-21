<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PhotosRepository")
 */
class Photos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Image(maxSize="2M", maxSizeMessage="Le fichier ne doit pas faire plus de 2Mo",
     * mimeTypesMessage="Le fichier doit être une image")
     *
     */
    private $nom;


    /**
     * @var Prestataire
     * @ORM\ManyToOne(targetEntity="Prestataire")
     * @ORM\JoinColumn(name="prestataire_id", referencedColumnName="id")
     */
    private $prestataire;


    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNom() :?string
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     * @return Photos
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
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
     * @return Photos
     */
    public function setPrestataire(Prestataire $prestataire): Photos
    {
        $this->prestataire = $prestataire;
        return $this;
    }


}
