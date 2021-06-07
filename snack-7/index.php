<?php
  $students = [
    [
      'name' => 'Ugo',
      'lastName' => 'De Ughi',
      'votes' => [10, 10, 10, 9, 8]
    ],
    [
      'name' => 'Brambilla',
      'lastName' => 'Fumagalli',
      'votes' => [6, 4, 7, 8, 8]
    ],
    [
      'name' => 'Giuseppe',
      'lastName' => 'Battaglia',
      'votes' => [10, 3, 6, 2, 0]
    ],
    [
      'name' => 'Roberto',
      'lastName' => 'Buttafuochi',
      'votes' => [8, 10, 2, 8, 7]
    ],
  ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>snack-7-cicli</title>
</head>
<body>

  <?php

    foreach ($students as $student) { ?>

      <ul>
        <li>Nome: <?php echo $student['name'] ?> </li>
        <li>Cognome: <?php echo $student['lastName'] ?> </li>
        <li>Media: <?php echo array_sum($student['votes']) / count($student['votes']) ?> </li>
      </ul>

  <?php } ?>



</body>
</html>