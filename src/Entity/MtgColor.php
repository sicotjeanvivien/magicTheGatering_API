<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\MtgColorRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;

#[ORM\Entity(repositoryClass: MtgColorRepository::class)]
#[ApiResource]
#[HasLifecycleCallbacks]
class MtgColor
{
   use CommonAttributesTrait;

    #[ORM\Column(type: 'string', length: 50)]
    private $code;

    #[ORM\Column(type: 'string', length: 50)]
    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

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
}
