<?php  
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

    $sensors = $system->getSensors();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Security Exercise</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Sensor State</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Type</th>
        <th>State</th>
        <th>Alarm</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($sensors as $sensor): ?>
      <tr class="<?php if ($sensor->soundAlarm() == 'Alarm') echo 'danger'; else echo 'success';?>" >
        <td><?php echo $sensor->getName(); ?></td>
        <td><?php echo $sensor->getType(); ?></td>
        <td><?php echo $sensor->getState();?></td>
        <td><?php echo $sensor->soundAlarm();?></td>
      </tr>      
   <?php endforeach; ?>
    </tbody>
  </table>
</div>

</body>
</html>