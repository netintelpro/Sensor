<?php
    define('SMARTY_DIR','vendor/smarty/smarty/libs/');
    require_once(SMARTY_DIR . 'Smarty.class.php');
    $smarty = new Smarty();
  
    $smarty->template_dir = 'templates/';
    $smarty->compile_dir  = 'templates_c/';
    $smarty->config_dir   = 'configs/';
    $smarty->cache_dir    = 'cache/';
    
    require 'Sensor.php';
    require 'SensorSystem.php';

    $settings = [

        ['name' => 'Kitchen Temperature','type' => 'Fire', 'threshold' => 100],
        ['name' => 'Basement Temperature', 'type' => 'Freeze', 'threshold' => 30],
        ['name' => 'Front Door','type' => 'Door', 'threshold' => 'Open'],
        ['name' => 'Back Door', 'type' => 'Door', 'threshold' => 'Open'],
        ['name' => 'Basement','type' => 'GlassBreak', 'threshold' => 950],
        ['name' => 'Main Floor', 'type' => 'GlassBreak', 'threshold' => 950],
        ['name' => 'Upstairs','type' => 'GlassBreak', 'threshold' => 950],
        ['name' => 'Bedroom 1', 'type' => 'Smoke', 'threshold' => 75],
        ['name' => 'Bedroom 2','type' => 'Smoke', 'threshold' => 75],
        ['name' => 'Hallway', 'type' => 'Smoke', 'threshold' => 75],
     ];

     $system = new SensorSystem($settings);

     $sensors = $system->getSensorsArray();


     $smarty->assign('sensors', $sensors);
     $smarty->display('index.tpl');
?>
