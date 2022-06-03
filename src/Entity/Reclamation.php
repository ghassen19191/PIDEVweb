<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity(repositoryClass="App\Repository\ReclamationRepository")
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_rec", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups("post:read")
     */
    private $idRec;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_rec", type="string", length=50, nullable=false)
     * @Groups("post:read")
     */
    private $nomRec= 'Mouna';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rec", type="date", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     * @Groups("post:read")
     */
    private $dateRec ;
    public function __construct()
    {
        $this->dateRec = new \DateTime();
    }
    /**
     * @var string
     * @Assert\NotBlank(message=" description doit etre non vide")
     * @ORM\Column(name="descri_rec", type="string", length=200, nullable=false)
     * @Groups("post:read")
     */
    private $descriRec;

    /**
     * @var string
     *
     * @ORM\Column(name="traite", type="string", length=50, nullable=false, options={"default"="non traitée"})
     * @Groups("post:read")
     */
    private $traite = 'non traitée';

    public function getIdRec(): ?int
    {
        return $this->idRec;
    }

    public function getNomRec(): ?string
    {
        return $this->nomRec;
    }

    public function setNomRec(string $nomRec): self
    {
        $this->nomRec = $nomRec;

        return $this;
    }

    public function getDateRec(): ?\DateTimeInterface
    {
        return $this->dateRec;
    }

    public function setDateRec(\DateTimeInterface $dateRec): self
    {
        $this->dateRec = $dateRec;

        return $this;
    }

    public function getDescriRec(): ?string
    {
        return $this->descriRec;
    }

    public function setDescriRec(string $descriRec): self
    {
        $this->descriRec = $descriRec;

        return $this;
    }

    public function getTraite(): ?string
    {
        return $this->traite;
    }

    public function setTraite(string $traite): self
    {
        $this->traite = $traite;

        return $this;
    }


}
