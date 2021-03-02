<?php
use Doctrine\Collection\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="Roles")
 */
class Roles 
{
    /** @ORM\id @ORM\column(type="integer") @ORM\GeneratedValue**/
    private $id;
    /** @ORM\column(type="string")**/
    private $nom;
    /**
     * Many Roles have Many Users.
     * @ORM\ManyToMany(targetEntity="User" mappedBy=roles)
     */
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
 
    public function setUsers($users)
    {
        $this->users = $users;

        return $this;
    }
}
?>