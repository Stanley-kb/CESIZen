<?php

namespace App\Entity;

use App\Repository\StressAnalysisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StressAnalysisRepository::class)]
#[ORM\Table(name: 'stressAnalysis')]
class StressAnalysis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_stressAnalysis', type: 'integer')]
    private ?int $id_stressAnalysis = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $creationDate = null;

    #[ORM\Column(length: 500)]
    private ?string $analysisResult = null;

    public function getIdStressAnalysis(): ?int
    {
        return $this->id_stressAnalysis;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate;
    }

    public function setCreationDate(\DateTimeInterface $creationDate): static
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getAnalysisResult(): ?string
    {
        return $this->analysisResult;
    }

    public function setAnalysisResult(string $analysisResult): static
    {
        $this->analysisResult = $analysisResult;

        return $this;
    }
}