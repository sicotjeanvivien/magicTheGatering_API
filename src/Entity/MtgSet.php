<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\MtgSetRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;

#[ORM\Entity(repositoryClass: MtgSetRepository::class)]
#[ApiResource]
#[HasLifecycleCallbacks]
class MtgSet
{

    use CommonAttributesTrait;

    #[ORM\Column(type: 'string', length: 25)]
    private $code;

    #[ORM\Column(type: 'string', length: 150)]
    private $name;

    #[ORM\Column(type: 'date')]
    private $releaseDate;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $onlineOnly;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
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

    public function getReleaseDate(): ?\DateTimeInterface
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(\DateTimeInterface $releaseDate): self
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    public function getOnlineOnly(): ?bool
    {
        return $this->onlineOnly;
    }

    public function setOnlineOnly(?bool $onlineOnly): self
    {
        $this->onlineOnly = $onlineOnly;

        return $this;
    }

}


