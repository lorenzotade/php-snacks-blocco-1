<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>snack-1-cicli</title>
</head>
<body>
  <?php

    $matches = [
      [
        'home' => 'Milano',
        'away' => 'Napoli',
        'homePoints' => 67,
        'awayPoints' => 12
      ],
      [
        'home' => 'Torino',
        'away' => 'Piacenza',
        'homePoints' => 453,
        'awayPoints' => 6
      ],
      [
        'home' => 'Bologna',
        'away' => 'Padova',
        'homePoints' => 98,
        'awayPoints' => 45
      ],
      [
        'home' => 'Salerno',
        'away' => 'Reggio Calabria',
        'homePoints' => 32,
        'awayPoints' => 34
      ]
    ];

    foreach ($matches as $match) {
        echo "<li>" . $match['home'] . " - " . $match['away'] . " | " . $match['homePoints'] . "-" . $match['awayPoints'] . "</li>";
    }
    
  ?> 
</body>
</html>