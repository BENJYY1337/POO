<?php

/**
 * @author Benjamin Pernot.
 */

class Vehicle
{
    /**
     * @var boolean Etat des pneus
     * @var int Niveau de carburant
     * @var boolean Etat de démarrage du moteur
     */

    private $_wheel_condition = TRUE;
    private $_fuel_level = 100;
    private $_engine_state = FALSE;
    private $_engine_power;
    private static $_honk = 'Tuuut Tuut';

    /**
     * @var int puissance moteur faible
     * @var int puissance moteur moyenne
     * @var int puissance moteur élevée
     */

    const LOW_ENGINE_POWER = 90;
    const MID_ENGINE_POWER = 110;
    const HIGH_ENGINE_POWER = 130;

    public static function toHonk()
    {
        echo self::$_honk;
    }

    public function __construct($_wheel_condition, $_fuel_level, $_engine_power)
    {
        $this->_wheel_condition = $_wheel_condition;
        $this->_fuel_level = $_fuel_level;
        $this->_engine_power = $_engine_power;
    }
    public function engine_start()
    {
        $rand_value = rand(0, 100);
        if ($rand_value > 20) {
            $this->_engine_state = true;
        } else {
            $this->_engine_state = false;
        }
    }
    public function wheel_condition()
    {
        return $this->_wheel_condition;
    }

    public function fuel_level()
    {
        return $this->_fuel_level;
    }

    public function engine_state()
    {
        return $this->_engine_state;
    }
    public function engine_power()
    {
        if ($this->_engine_power <= self::LOW_ENGINE_POWER)
            return "LOW";
        else if ($this->_engine_power <= self::MID_ENGINE_POWER)
            return "MID";
        else if ($this->_engine_power <= self::HIGH_ENGINE_POWER)
            return "HIGH";
    }
}
