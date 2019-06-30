{* define format type function *}
{* We prefer output presentation/format function in presentation layer*}
{function name=formatByType}
    {if $sensor.type == 'Door'}
       {$sensor.state}
    {elseif $sensor.type == 'GlassBreak'}
        {number_format($sensor.state,3)}
    {else}
        {number_format($sensor.state,1)}
    {/if}
{/function}

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
    {foreach $sensors as $sensor}
    {strip}
      <tr class="{if $sensor.alarm == 'Alarm'}danger{else}success{/if}">
        <td>{$sensor.name}</td>
        <td>{$sensor.type}</td>
        <td>{formatByType}{$sensor.units}</td>
        <td>{$sensor.alarm}</td>
      </tr>
     {/strip}
     {/foreach}
    </tbody>
  </table>
</div>
</body>
</html>
