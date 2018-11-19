<?php
// src/GoTBundle/Entity/Personaje.php
namespace GoTBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity(repositoryClass="GoTBundle\Entity\PersonajeRepository")
* @ORM\Table(name="personaje")
* @ORM\HasLifecycleCallbacks()
*/

class Personaje
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

	/**
    * @ORM\Column(type="string")
    */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string")
     */
    private $gender;

    /**
    * @ORM\Column(type="text")
    */
    private $foto;

    /**
     * @ORM\ManyToOne(targetEntity="House", inversedBy="personajes")
     * @ORM\JoinColumn(name="house_id", referencedColumnName="id")
     */
    private $house;

    /**
    * @ORM\ManyToMany(targetEntity="Season", inversedBy="personajes")
    * @ORM\JoinTable(name="characters_seasons")
    */
    private $seasons;

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
     * Constructor
     */
    public function __construct()
    {
        $this->seasons = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Personaje
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
     * Set description
     *
     * @param string $description
     *
     * @return Personaje
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
    public function getDescription($length = null)
    {
        if (false === is_null($length) && $length > 0 && strlen($this->description) > $length)
        return substr($this->description, 0, $length) . "(...)";
    else
        return $this->description;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Personaje
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return Personaje
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set house
     *
     * @param \GoTBundle\Entity\House $house
     *
     * @return Personaje
     */
    public function setHouse(\GoTBundle\Entity\House $house = null)
    {
        $this->house = $house;

        return $this;
    }

    /**
     * Get house
     *
     * @return \GoTBundle\Entity\House
     */
    public function getHouse()
    {
        return $this->house;
    }

    /**
     * Add season
     *
     * @param \GoTBundle\Entity\Season $season
     *
     * @return Personaje
     */
    public function addSeason(\GoTBundle\Entity\Season $season)
    {
        $this->seasons[] = $season;

        return $this;
    }

    /**
     * Remove season
     *
     * @param \GoTBundle\Entity\Season $season
     */
    public function removeSeason(\GoTBundle\Entity\Season $season)
    {
        $this->seasons->removeElement($season);
    }

    /**
     * Get seasons
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSeasons()
    {
        return $this->seasons;
    }
}
