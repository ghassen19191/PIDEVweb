<?php

namespace App\Entity;

use App\Repository\GameRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use JsonSerializable;

/**
 * @ORM\Entity(repositoryClass=GameRepository::class)
 */
class Game implements JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message=" Name cannot be empty")
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Category cannot be empty")
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Description cannot be empty")
     */
    private $description;

    /**
     * @ORM\Column(type="date")
     * 
     */
    private $release_year;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Release year Name cannot be empty")
     */
    private $price;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Stock cannot be empty")
     */
    private $stock;

    /**
     * @ORM\OneToMany(targetEntity=Achat::class, mappedBy="game")
     */
    private $achats;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @ORM\ManyToMany(targetEntity=Achatt::class, mappedBy="game")
     */
    private $achatts;

    public function __construct()
    {
        $this->achats = new ArrayCollection();
        $this->achatts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getReleaseYear(): ?\DateTimeInterface
    {
        return $this->release_year;
    }

    public function setReleaseYear(\DateTimeInterface $release_year): self
    {
        $this->release_year = $release_year;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * @return Collection<int, Achat>
     */
    public function getAchats(): Collection
    {
        return $this->achats;
    }

    public function addAchat(Achat $achat): self
    {
        if (!$this->achats->contains($achat)) {
            $this->achats[] = $achat;
            $achat->setGame($this);
        }

        return $this;
    }

    public function removeAchat(Achat $achat): self
    {
        if ($this->achats->removeElement($achat)) {
            // set the owning side to null (unless already changed)
            if ($achat->getGame() === $this) {
                $achat->setGame(null);
            }
        }

        return $this;
    }
    public function __toString(): string{
        return $this->name;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return Collection<int, Achatt>
     */
    public function getAchatts(): Collection
    {
        return $this->achatts;
    }

    public function addAchatt(Achatt $achatt): self
    {
        if (!$this->achatts->contains($achatt)) {
            $this->achatts[] = $achatt;
            $achatt->addGame($this);
        }

        return $this;
    }

    public function removeAchatt(Achatt $achatt): self
    {
        if ($this->achatts->removeElement($achatt)) {
            $achatt->removeGame($this);
        }

        return $this;
    }

    public function jsonSerialize(): array
    {
        return array(
            'id' => $this->id,
            'name' => $this->name,
            'category' => $this->category,
            'description' => $this->description,
            'releaseYear' => $this->release_year->format("d-m-Y"),
            'price' => $this->price,
            'image' => $this->photo,
            'stock' => $this->stock

        );
    }

    public function setUp($name, $category, $description, $releaseYear, $price, $image, $stock)
    {
        $this->name = $name;
        $this->category = $category;
        $this->description = $description;
        $this->release_year = $releaseYear;
        $this->price = $price;
        $this->photo = $image;
        $this->stock = $stock;

    }
}
