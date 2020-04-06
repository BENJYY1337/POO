<?php
class Vehicle
{
    private $wheel_condition = true; // Etat des pneus ( TRUE par defaut)
    private $fuel_level = 100; // Essence ( 100% par defaut)
    private $engine_state = false; // Etat de démarrage du moteur (FALSE par defaut)

    public function __construct($wheel_condition, $fuel_level)
    {
        $this->wheel_condition = $wheel_condition;
        $this->fuel_level = $fuel_level;
        $this->fuel_level = 100;
    }
    public function engine_start()
    {
        $rand_value = rand(1, 100);
        if ($rand_value > 20) {
            $this->engine_state = true;
        } else {
            $this->engine_state = false;
        }
    }
    public function wheel_condition()
    {
        return $this->wheel_condition;
    }

    public function fuel_level()
    {
        return $this->fuel_level;
    }

    public function engine_state()
    {
        return $this->engine_state;
    }
}
