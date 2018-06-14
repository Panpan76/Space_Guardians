<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="planet")
 */
class Planet
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
     * @ORM\ManyToOne(targetEntity="App\Entity\SolarSystem", inversedBy="planets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $solarSystem;

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

    public function getSolarSystem(){
        return $this->solarSystem;
    }

    public function setSolarSystem($solarSystem){
        $this->solarSystem = $solarSystem;
        return $this;
    }
}
