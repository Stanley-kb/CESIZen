<?php

namespace App\Entity;

use App\Repository\AnswerOptionRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Question;

#[ORM\Entity(repositoryClass: AnswerOptionRepository::class)]
class AnswerOption
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $optionText = null;

    #[ORM\ManyToOne(targetEntity: Question::class, inversedBy: 'answerOptions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Question $question = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOptionText(): ?string
    {
        return $this->optionText;
    }

    public function setOptionText(?string $optionText): static
    {
        $this->optionText = $optionText;

        return $this;
    }

    public function getQuestion(): ?Question
    {
        return $this->question;
    }

    public function setQuestion(?Question $question): static
    {
        $this->question = $question;

        return $this;
    }
}