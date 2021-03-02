<?php
use Doctrine\Collection\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="User")
 */
class User 
{
    /** @ORM\id @ORM\column(type="integer") @ORM\GeneratedValue**/
    private $id;
    /** @ORM\column(type="string")**/
    private $nom;
    /** @ORM\column(type="string")**/
    private $prenom;
    /** @ORM\column(type="integer")**/
    private $email;
    /** @ORM\column(type="string")**/
    private $password;
    /**
     * One User have many lieu. This is the owning side.
     * @ORM\OneToMany(targetEntity="Lieu", mappedBy="users")
     */
    private $lieux;
    /**
     * Many Users have Many Roles.
     * @ORM\ManyToMany(targetEntity="Roles" inversedBy="users")
     * @ORM\JoinTable(name="users_roles")
     */
    private $roles;

    public function __construct()
    {
        $this->roles = new ArrayCollection();
        $this->lieux = new ArrayCollection();
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }
 
    public function getLieux()
    {
        return $this->lieux;
    }

    public function setLieux($lieux)
    {
        $this->lieux = $lieux;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
 
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}
    
?>