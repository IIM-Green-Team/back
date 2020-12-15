<?php

namespace App\Entity;

use App\Repository\GetDataDatasetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GetDataDatasetRepository::class)
 */
class GetDataDataset
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
    private $datasetId;

    /**
     * @ORM\ManyToOne(targetEntity=GetDataApi::class, inversedBy="getDataDatasets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $getDataApi;

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

    public function getDatasetId(): ?string
    {
        return $this->datasetId;
    }

    public function setDatasetId(string $datasetId): self
    {
        $this->datasetId = $datasetId;

        return $this;
    }

    public function getGetDataApi(): ?GetDataApi
    {
        return $this->getDataApi;
    }

    public function setGetDataApi(?GetDataApi $getDataApi): self
    {
        $this->getDataApi = $getDataApi;

        return $this;
    }
}
