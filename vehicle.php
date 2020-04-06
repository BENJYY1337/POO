<?php
class Vehicle
{
    private $wheel_condition = true; // Etat des pneus ( TRUE par defaut)
    private $fuel_level = 100; // Essence ( 100% par defaut)
    private $engine_state = false; // Etat de démarrage du moteur (FALSE par defaut)
    private $engine_power;
    const LOW_ENGINE_POWER = 90;
    const MID_ENGINE_POWER = 110;
    const HIGH_ENGINE_POWER = 130;

    public function __construct($wheel_condition, $fuel_level, $engine_power)
    {
        $this->wheel_condition = $wheel_condition;
        $this->fuel_level = $fuel_level;
        $this->fuel_level = 100;
        $this->engine_power = $engine_power;
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
    public function engine_power()
    {
        if ($this->engine_power <= self::LOW_ENGINE_POWER)
            return "LOW";
        else if ($this->engine_power <= self::MID_ENGINE_POWER)
            return "MID";
        else if ($this->engine_power <= self::HIGH_ENGINE_POWER)
            return "HIGH";
    }
}
