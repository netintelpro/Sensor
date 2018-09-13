<?php

require_once 'Sensor.php';

class SensorSystem
{
    
    private $sensors = array(); //list of all sensors
	
    public function __construct($settings)
    {
		
        foreach($settings as $setting) {
            //constructs sensors according to contents of associated settings array
            extract($setting);
            $state  = 0;
            $sensorConstructorName = $type."Sensor";
            $sensor = new $sensorConstructorName($name,$threshold,$state);
            $this->sensors[] = $sensor;
         }
    }

    private function generateRandom()
    {
        //returns random float between 0 to 1
        return mt_rand() / mt_getrandmax();
    }    

    private function updateSensorState($type)
    {
        //provides sensor type appropriate random state values
        switch ($type) {
            case 'GlassBreak': $state = 1000 * $this->generateRandom();       break;
            case 'Smoke'     : $state = 100  * $this->generateRandom();       break;
            case 'Door'      : $state = (rand(0,1) > 0 ? "Open" : "Closed");  break;            
            default          : $state = 20 + (100 * $this->generateRandom()); break;
        }

        return $state;
		    
	}



    public function getSensors()
    {
        //updates each sensor's state value
		foreach($this->sensors as $sensor) {
			$sensor->setState($this->updateSensorState($sensor->getType()));
		}
		return $this->sensors;
	}
}