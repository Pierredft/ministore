<?php

namespace App\Entity;

use App\Repository\LogoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LogoRepository::class)]
class Logo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $imgLogo = null;

    public function __toString(): string
    {
        return $this->imgLogo;
    }

    public function __construct()
    {
        $this->imgLogo = 'logo.png';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImgLogo(): ?string
    {
        return $this->imgLogo;
    }

    public function setImgLogo(string $imgLogo): static
    {
        $this->imgLogo = $imgLogo;

        return $this;
    }
}
