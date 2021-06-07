<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>snack-2-cicli</title>
</head>
<body>
  <?php

    $posts = [
      '10/01/2021' => [
        ['title' => 'Compleanno mamma',
        'author' => 'Lorenzo Tadè',
        'text' => 'Tanti auguri mamma']
      ],
      '21/03/2021' => [
        ['title' => 'Compleanno fratello',
        'author' => 'Lorenzo Tadè',
        'text' => 'Tanti auguri fratello']
      ],
      '17/04/2021' => [
        ['title' => 'Compleanno mio',
        'author' => 'Lorenzo Tadè',
        'text' => 'Tanti auguri me stesso']
      ],
      '03/10/2021' => [
        ['title' => 'Compleanno papà',
        'author' => 'Lorenzo Tadè',
        'text' => 'Tanti auguri papà']
      ],
    ];

    /* foreach ($posts as $post => $value) {
      echo "<ul>
              <li>" . $post . 
                "<ul>
                  <li>Titolo: " . $value['title'] . "</li>
                  <li>Autore: " . $value['author'] . "</li>
                  <li>Testo: " . $value['text'] . "</li>
                 </ul>
              </li>
            </ul>";
    } */

    foreach($posts as $key => $post){
      foreach($post as $msg){
        echo $key . "<br>"; 
        echo $msg['title'] . "<br>";
        echo $msg['author'] . "<br>";
        echo $msg['text'] . "<br><br>";
      }
    }
    
  ?>
</body>
</html>