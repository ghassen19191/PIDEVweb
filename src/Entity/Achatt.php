<?php

namespace App\Entity;

use App\Repository\AchattRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;

/**
 * @ORM\Entity(repositoryClass=AchattRepository::class)
 */
class Achatt implements JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=Game::class, inversedBy="achatts")
     */
    private $game;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $prix;

    public function __construct()
    {
        $this->game = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Game>
     */
    public function getGame(): Collection
    {
        return $this->game;
    }

    public function addGame(Game $game): self
    {
        if (!$this->game->contains($game)) {
            $this->game[] = $game;
        }

        return $this;
    }

    public function removeGame(Game $game): self
    {
        $this->game->removeElement($game);

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix($prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function jsonSerialize(): array
    {
        $game = null;
        if ($this->game){
            if ($this->game[0]){
                $game = $this->game[0];
            }
        }
        return array(
            'id' => $this->id,
            'prix' => $this->prix,
            'game' => $game

        );
    }

    public function setUp($prix, $game)
    {
        $this->prix = $prix;
        $this->game = [$game];

    }
}
