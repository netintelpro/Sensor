<?php

class Sensor 
{
    protected $name;

    protected $state;

    protected $threshold;

    protected $units = "";

    protected $type = "";

    public function __construct($name, $threshold, $state)
    {
        $this->name      = $name;
        $this->threshold = $threshold;
        $this->state     = $state;
    }

    public function setState($state)
    {
        $this->state = $state;
    } 
    
    public function getState()
    {        
        return $this->state;
    }
    
    public function getUnits()
    {
        return $this->units;
    } 

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
		return $this->type;
	}

    public function soundAlarm()
    {
        //default soundAlarm function
	    if ($this->state >= $this->threshold) 
	    	return "Alarm";
    }
}

class GlassBreakSensor extends Sensor
{
	protected $type = "GlassBreak";

	protected $units = " hz";
	
}

class SmokeSensor extends Sensor
{
	protected $type = "Smoke";

	protected $units = "% Visibility";

    public function soundAlarm()
    {
        if ($this->state <= $this->threshold)
            return "Alarm";
    }

}

class DoorSensor extends Sensor
{
	protected $type = "Door";

	public function soundAlarm()
    {
	    if ($this->state == "Open") 
	        return "Alarm";
    }	
}

class TemperatureSensor extends Sensor 
{
	protected $units = " Degrees";

}

class FireSensor extends TemperatureSensor
{
	protected $type = "Fire";
	
}

class FreezeSensor extends TemperatureSensor
{
	protected $type = "Freeze";

	public function soundAlarm()
    {
	    if ($this->state <= $this->threshold) 
	        return "Alarm";
    }	
}
