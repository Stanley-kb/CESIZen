<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\StressTest;

#[ORM\Entity(repositoryClass: QuestionRepository::class)]
class Question
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_question', type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $title = null;

    #[ORM\Column(length: 50)]
    private ?string $type = null;

    #[ORM\ManyToOne(targetEntity: StressTest::class)]
    #[ORM\JoinColumn(name: 'id_stressTest', referencedColumnName: 'id_stressTest', nullable: false)]
    private ?StressTest $stressTest = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getStressTest(): ?StressTest
    {
        return $this->stressTest;
    }

    public function setStressTest(?StressTest $stressTest): static
    {
        $this->stressTest = $stressTest;

        return $this;
    }
}