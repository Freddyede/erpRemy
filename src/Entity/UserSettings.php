<?php

namespace App\Entity;

use App\Repository\UserSettingsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserSettingsRepository::class)]
class UserSettings
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 6, nullable: true)]
    private ?string $textColor = null;

    #[ORM\Column(length: 6, nullable: true)]
    private ?string $bgColor = null;

    #[ORM\Column(length: 6, nullable: true)]
    private ?string $navbarBgColor = null;

    #[ORM\Column(length: 6, nullable: true)]
    private ?string $navbarColor = null;

    #[ORM\Column(length: 6, nullable: true)]
    private ?string $sidebarBgColor = null;

    #[ORM\Column(length: 6, nullable: true)]
    private ?string $sidebarColor = null;

    #[ORM\Column(length: 6, nullable: true)]
    private ?string $footerBgColor = null;

    #[ORM\Column(length: 6, nullable: true)]
    private ?string $footerColor = null;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'userSettings')]
    private Collection $user;

    public function __construct()
    {
        $this->user = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTextColor(): ?string
    {
        return $this->textColor;
    }

    public function setTextColor(?string $textColor): static
    {
        $this->textColor = $textColor;

        return $this;
    }

    public function getBgColor(): ?string
    {
        return $this->bgColor;
    }

    public function setBgColor(?string $bgColor): static
    {
        $this->bgColor = $bgColor;

        return $this;
    }

    public function getNavbarBgColor(): ?string
    {
        return $this->navbarBgColor;
    }

    public function setNavbarBgColor(?string $navbarBgColor): static
    {
        $this->navbarBgColor = $navbarBgColor;

        return $this;
    }

    public function getNavbarColor(): ?string
    {
        return $this->navbarColor;
    }

    public function setNavbarColor(?string $navbarColor): static
    {
        $this->navbarColor = $navbarColor;

        return $this;
    }

    public function getSidebarBgColor(): ?string
    {
        return $this->sidebarBgColor;
    }

    public function setSidebarBgColor(?string $sidebarBgColor): static
    {
        $this->sidebarBgColor = $sidebarBgColor;

        return $this;
    }

    public function getSidebarColor(): ?string
    {
        return $this->sidebarColor;
    }

    public function setSidebarColor(?string $sidebarColor): static
    {
        $this->sidebarColor = $sidebarColor;

        return $this;
    }

    public function getFooterBgColor(): ?string
    {
        return $this->footerBgColor;
    }

    public function setFooterBgColor(?string $footerBgColor): static
    {
        $this->footerBgColor = $footerBgColor;

        return $this;
    }

    public function getFooterColor(): ?string
    {
        return $this->footerColor;
    }

    public function setFooterColor(?string $footerColor): static
    {
        $this->footerColor = $footerColor;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUser(): Collection
    {
        return $this->user;
    }

    public function addUser(User $user): static
    {
        if (!$this->user->contains($user)) {
            $this->user->add($user);
        }

        return $this;
    }

    public function removeUser(User $user): static
    {
        $this->user->removeElement($user);

        return $this;
    }
}
