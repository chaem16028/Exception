<?php
require_once 'Vehicle.php';


class Car extends Vehicle
{

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];

/**
* @var boolean
*/
private $hasParkBrake;


/**
* @var string
*/
protected $energy;

/**
* @var int
*/
protected $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

public function getEnergy(): string
{
    return $this->energy;
}

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

public function getEnergyLevel(): int
{
    return $this->energyLevel;
}

public function setEnergyLevel(int $energyLevel): void
{
    $this->energyLevel = $energyLevel;
}







public function setParkBrake($hasParkBrake): void
{
    $this->hasParkBrake = $hasParkBrake;
}
public function getParkBrake()
{
    return $this->hasParkBrake;
}


public function start()
{
    if ($this->hasParkBrake==true){
        throw new Exception("Frein à main actif");
    }
}




}
