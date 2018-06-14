<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="solar_system")
 */
class SolarSystem
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $x;

    /**
     * @ORM\Column(type="integer")
     */
    private $y;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Planet", mappedBy="solarSystem")
     */
    private $planets;

    public function getId(){
        return $this->id;
    }

    public function getX(){
        return $this->x;
    }

    public function setX($x){
        $this->x = $x;
        return $this;
    }

    public function getY(){
        return $this->y;
    }

    public function setY($y){
        $this->y = $y;
        return $this;
    }

    public function getPlanets(){
        return $this->planets;
    }
}
