<?php

namespace App\Entity;

use App\Repository\UserTestRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserTestRepository::class)]
#[ORM\Table(name: 'user_test')]
class UserTest
{
    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'id_user', referencedColumnName: 'id_user', nullable: false)]
    private ?User $user = null;

    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: StressAnalysis::class)]
    #[ORM\JoinColumn(name: 'id_stressAnalysis', referencedColumnName: 'id_stressAnalysis', nullable: false)]
    private ?StressAnalysis $stressAnalysis = null;

    #[ORM\Id]
    #[ORM\ManyToOne(targetEntity: StressTest::class)]
    #[ORM\JoinColumn(name: 'id_stressTest', referencedColumnName: 'id_stressTest', nullable: false)]
    private ?StressTest $stressTest = null;

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;
        return $this;
    }

    public function getStressAnalysis(): ?StressAnalysis
    {
        return $this->stressAnalysis;
    }

    public function setStressAnalysis(?StressAnalysis $stressAnalysis): static
    {
        $this->stressAnalysis = $stressAnalysis;
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