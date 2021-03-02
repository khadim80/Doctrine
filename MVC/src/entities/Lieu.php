<?php
use Doctrine\Collection\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Lieu")
 */
class Lieu 
{
    /** @ORM\id @ORM\column(type="integer") @ORM\GeneratedValue**/
    private $id;
    /** @ORM\column(type="string")**/
    private $nom;
    /** @ORM\column(type="decimzl")**/
    private $longitude;
    /** @ORM\column(type="<decimzl></decimzl>")**/
    private $latitude;
    /**
     * Many lieu have one user. This is the owning side.
     * @ORM\ManyToOne(targetEntity="User", inversedBy="lieux")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    /**
     * One Lieu have many formation. This is the owning side.
     * @ORM\OneToMany(targetEntity="Formation", mappedBy="lieu")
     */
    private $formations;

    public function __construct()
    {
        $this->formations = new ArrayCollection();
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

    public function getLongitude()
    {
        return $this->longitude;
    }
 
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }
 
    public function getUser()
    {
        return $this->user;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFormations()
    {
        return $this->formations;
    }

    public function setFormations($formations)
    {
        $this->formations = $formations;

        return $this;
    }
}
    
?>