<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
class Post
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_post", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups("post:read")
     */
    private $idPost;

    /**
     * @var string
     * @Assert\NotBlank(message=" titre doit etre non vide")
     * @ORM\Column(name="titre", type="string", length=50, nullable=false)
     * @Groups("post:read")
     */
    private $titre;

    /**
     * @var string
     *@Assert\NotBlank(message=" auteur doit etre non vide")
     * @ORM\Column(name="auteur", type="string", length=50, nullable=false)
     * @Groups("post:read")
     */
    private $auteur;

    /**
     * @var string
     *@Assert\NotBlank(message=" description doit etre non vide")
     * @ORM\Column(name="img_post", type="string", length=200, nullable=false)
     * @Groups("post:read")
     */
    private $imgPost;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_post", type="date", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     * @Groups("post:read")
     */
    private $datePost ;
    public function __construct()
    {
        $this->datePost = new \DateTime();
    }

    /**
     * @var int|null
     * @Assert\NotBlank(message=" rate doit etre non vide")
     * @Assert\Length(
     *     
     *      max =1,
     *      maxMessage=" Entrer un nombre < 5 "
     *
     *     )
     * @ORM\Column(name="rate", type="integer", nullable=true)
     * @Groups("post:read")
     */
    private $rate= '0';

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=50, nullable=false)
     * @Groups("post:read")
     */
    private $image;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups("post:read")
     */
    private $enable=0;

    public function getIdPost(): ?int
    {
        return $this->idPost;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getImgPost(): ?string
    {
        return $this->imgPost;
    }

    public function setImgPost(string $imgPost): self
    {
        $this->imgPost = $imgPost;

        return $this;
    }

    public function getDatePost(): ?\DateTimeInterface
    { 
        return $this->datePost;
    }

    public function setDatePost(\DateTimeInterface $datePost): self
    {
        $this->datePost = $datePost;

        return $this;
    }

    public function getRate(): ?int
    {
        return $this->rate;
    }

    public function setRate(?int $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function __toString()
    {
        return (string) $this->titre;
    }

    public function getEnable(): ?bool
    {
        return $this->enable;
    }

    public function setEnable(?bool $enable): self
    {
        $this->enable = $enable;

        return $this;
    }
}
