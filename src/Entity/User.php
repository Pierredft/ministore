<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    private ?string $plainPassword = 'password';

    private ?string $newPassword = 'password';
    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = 'password';

    #[ORM\Column(length: 10)]
    private ?string $numTel = null;

    #[ORM\Column(length: 10)]
    private ?string $numMaison = null;

    #[ORM\Column(length: 100)]
    private ?string $nomVoie = null;

    #[ORM\Column(length: 100)]
    private ?string $Ville = null;

    #[ORM\Column(length: 100)]
    private ?string $codePostale = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    private ?string $prenom = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */

    public function getNewPassword(): string
    {
        return $this->newPassword;
    }

    public function setNewPassword(string $newPassword): static
    {
        $this->newPassword = $newPassword;

        return $this;
    }
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNumTel(): ?string
    {
        return $this->numTel;
    }

    public function setNumTel(string $numTel): static
    {
        $this->numTel = $numTel;

        return $this;
    }

    public function getNumMaison(): ?string
    {
        return $this->numMaison;
    }

    public function setNumMaison(string $numMaison): static
    {
        $this->numMaison = $numMaison;

        return $this;
    }

    public function getNomVoie(): ?string
    {
        return $this->nomVoie;
    }

    public function setNomVoie(string $nomVoie): static
    {
        $this->nomVoie = $nomVoie;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->Ville;
    }

    public function setVille(string $Ville): static
    {
        $this->Ville = $Ville;

        return $this;
    }

    public function getCodePostale(): ?string
    {
        return $this->codePostale;
    }

    public function setCodePostale(string $codePostale): static
    {
        $this->codePostale = $codePostale;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($plainPassword){
        $this->plainPassword = $plainPassword;
        return $this;
    }


}
