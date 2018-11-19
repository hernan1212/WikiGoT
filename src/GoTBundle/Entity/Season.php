<?php
// src/GoTBundle/Entity/Season.php
namespace GoTBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * GoTBundle\Entity\Season
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GoTBundle\Entity\SeasonRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Season
{
	/**
	* @ORM\ManyToMany(targetEntity="Personaje", mappedBy="seasons")
	*/
	private $personajes;
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha;

    /**
     * @ORM\Column(type="integer")
     */
    private $capitulos;

    /**
     * @ORM\Column(type="date")
     */
    private $resumen;
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
     * @return Season
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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Season
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Get characters
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCharacters()
    {
        return $this->characters;
    }

    /**
     * Set capitulos
     *
     * @param integer $capitulos
     *
     * @return Season
     */
    public function setCapitulos($capitulos)
    {
        $this->capitulos = $capitulos;

        return $this;
    }

    /**
     * Get capitulos
     *
     * @return integer
     */
    public function getCapitulos()
    {
        return $this->capitulos;
    }

    /**
     * Set resumen
     *
     * @param \DateTime $resumen
     *
     * @return Season
     */
    public function setResumen($resumen)
    {
        $this->resumen = $resumen;

        return $this;
    }

    /**
     * Get resumen
     *
     * @return \DateTime
     */
    public function getResumen()
    {
        return $this->resumen;
    }

    /**
     * Add personaje
     *
     * @param \GoTBundle\Entity\Personaje $personaje
     *
     * @return Season
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
