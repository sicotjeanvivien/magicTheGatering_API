<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\MtgSetTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;

#[ORM\Entity(repositoryClass: MtgSetTypeRepository::class)]
#[ApiResource]
#[HasLifecycleCallbacks]
class MtgSetType
{
    
    use CommonAttributesTrait;

    #[ORM\Column(type: 'string', length: 150)]
    private $name;

    #[ORM\OneToMany(mappedBy: 'mtgSetType', targetEntity: MtgSet::class)]
    private $sets;

    public function __construct()
    {
        $this->sets = new ArrayCollection();
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

    /**
     * @return Collection<int, MtgSet>
     */
    public function getSets(): Collection
    {
        return $this->sets;
    }

    public function addSet(MtgSet $set): self
    {
        if (!$this->sets->contains($set)) {
            $this->sets[] = $set;
            $set->setMtgSetType($this);
        }

        return $this;
    }

    public function removeSet(MtgSet $set): self
    {
        if ($this->sets->removeElement($set)) {
            // set the owning side to null (unless already changed)
            if ($set->getMtgSetType() === $this) {
                $set->setMtgSetType(null);
            }
        }

        return $this;
    }
}
