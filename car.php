<?php

class Car
{
    private int $nbWheels = 4;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats = 5;
    private string $energy = 'gazoil';
    private string $energyLevel;

/////// 
public function __construct(string $color, int $nbSeats, string $energyLevel)
{
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energyLevel = $energyLevel;
}


/////////////// Moving car
public function forward(): string
{
    $this->currentSpeed = 15;

    return "Go !";
}

public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
}

public function start(): string
{
    $sentence = "";
   while ($this->currentSpeed < 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
}


////////////////////

public function getNbWheels() : int 
{
    return $this->NbWheels();
}

public function getCurrentSpeed() : int 
{
    return $this->currentSpeed;
}

public function getColor() : string
{
    return $this->color;
}

public function getNbSeats() : int 
{
    return $this->nbSeats;
}

public function getEnergy() : string 
{
    return $this->energy;
}

public function getEnergyLevel() : string
{
    return $this->energyLevel;
}

}
