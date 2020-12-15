<?php

namespace App\Entity;

use App\Repository\GetDataApiRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GetDataApiRepository::class)
 */
class GetDataApi
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $entrypoint;

    /**
     * @ORM\OneToMany(targetEntity=GetDataDataset::class, mappedBy="getDataApi")
     */
    private $getDataDatasets;

    public function __construct()
    {
        $this->getDataDatasets = new ArrayCollection();
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

    public function getEntrypoint(): ?string
    {
        return $this->entrypoint;
    }

    public function setEntrypoint(string $entrypoint): self
    {
        $this->entrypoint = $entrypoint;

        return $this;
    }

    /**
     * @return Collection|GetDataDataset[]
     */
    public function getGetDataDatasets(): Collection
    {
        return $this->getDataDatasets;
    }

    public function addGetDataDataset(GetDataDataset $getDataDataset): self
    {
        if (!$this->getDataDatasets->contains($getDataDataset)) {
            $this->getDataDatasets[] = $getDataDataset;
            $getDataDataset->setGetDataApi($this);
        }

        return $this;
    }

    public function removeGetDataDataset(GetDataDataset $getDataDataset): self
    {
        if ($this->getDataDatasets->removeElement($getDataDataset)) {
            // set the owning side to null (unless already changed)
            if ($getDataDataset->getGetDataApi() === $this) {
                $getDataDataset->setGetDataApi(null);
            }
        }

        return $this;
    }
}
