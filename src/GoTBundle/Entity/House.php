<?php
// src/GoTBundle/Entity/House.php
namespace GoTBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GoTBundle\Entity\HouseRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class House
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

    /**
    * @ORM\OneToMany(targetEntity="Personaje", mappedBy="house")
    */
    private $personajes;

	/**
	* @ORM\Column(type="string")
	*/
	protected $name;

	/**
	* @ORM\Column(type="string")
	*/
	protected $motto;
	
	/**
	* @ORM\Column(type="string")
	*/
	protected $animal;

	/**
	* @ORM\Column(type="text")
	*/
	protected $description;

	/**
	* @ORM\Column(type="text")
	*/
	protected $emblem;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->personajes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return House
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set motto
     *
     * @param string $motto
     *
     * @return House
     */
    public function setMotto($motto)
    {
        $this->motto = $motto;

        return $this;
    }

    /**
     * Get motto
     *
     * @return string
     */
    public function getMotto()
    {
        return $this->motto;
    }

    /**
     * Set animal
     *
     * @param string $animal
     *
     * @return House
     */
    public function setAnimal($animal)
    {
        $this->animal = $animal;

        return $this;
    }

    /**
     * Get animal
     *
     * @return string
     */
    public function getAnimal()
    {
        return $this->animal;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return House
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set emblem
     *
     * @param string $emblem
     *
     * @return House
     */
    public function setEmblem($emblem)
    {
        $this->emblem = $emblem;

        return $this;
    }

    /**
     * Get emblem
     *
     * @return string
     */
    public function getEmblem()
    {
        return $this->emblem;
    }

    /**
     * Add personaje
     *
     * @param \GoTBundle\Entity\Personaje $personaje
     *
     * @return House
     */
    public function addPersonaje(\GoTBundle\Entity\Personaje $personaje)
    {
        $this->personajes[] = $personaje;

        return $this;
    }

    /**
     * Remove personaje
     *
     * @param \GoTBundle\Entity\Personaje $personaje
     */
    public function removePersonaje(\GoTBundle\Entity\Personaje $personaje)
    {
        $this->personajes->removeElement($personaje);
    }

    /**
     * Get personajes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonajes()
    {
        return $this->personajes;
    }
}
