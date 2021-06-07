<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>snack-6-cicli</title>
</head>
<body>
  <?php 

    $db = [
      'teachers' => [
          [
              'name' => 'Michele',
              'lastname' => 'Papagni'
          ],
          [
              'name' => 'Fabio',
              'lastname' => 'Forghieri'
          ]
      ],
      'pm' => [
          [
              'name' => 'Roberto',
              'lastname' => 'Marazzini'
          ],
          [
              'name' => 'Federico',
              'lastname' => 'Pellegrini'
          ]
      ]
    ];

    foreach ($db as $class => $teacher) {
      if ($class === 'teachers') { ?>
        <div class="gray"> <?php foreach ($teacher as $details) {
          echo '<p>' . $details['name'] . ' ' . $details['lastname'] . '</p>';
        } ?> </div> <?php
        
      } elseif ($class === 'pm') { ?>
        <div class="green"> <?php foreach ($teacher as $details) {
          echo '<p>' . $details['name'] . ' ' . $details['lastname'] . '</p>';
        } ?> </div> <?php
      }
      
    }

  ?>
</body>
</html>