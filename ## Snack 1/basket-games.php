<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php 
  
  $arrayGame = [
    [
      "home_team" => 'Boston Celtics',
      "visitors" => 'Whashington Wizards',
      "hote_points" => 107,
      "vist_points" => 88,
    ],

    [
      "home_team" => 'Dallas Mavericks',
      "visitors" => 'Orlando Magic',
      "hote_points" => 120,
      "vist_points" => 110,
    ],

    [
      "home_team" => 'Sacramento Kings',
      "visitors" => 'Memphis',
      "hote_points" => 103,
      "vist_points" => 120,
    ],

    [
      "home_team" => 'Seattle Supersonics',
      "visitors" => 'New Orleans Pelicans',
      "hote_points" => 90,
      "vist_points" => 83,
    ],

    [
      "home_team" => 'Huston Comets',
      "visitors" => 'Santa Cruz Warriors',
      "hote_points" => 108,
      "vist_points" => 120,
    ]
    
    ];

  var_dump($arrayGame);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nba last game</title>
</head>
<body>
    <ul>
      <?php
      for ($i=0; $i < count($arrayGame) ; $i++): ?>
            <li><?php echo $arrayGame[$i]["home_team"]; ?> - <?php echo $arrayGame[$i]["visitors"]; ?> | <?php echo $arrayGame[$i]["hote_points"]; ?> - <?php echo $arrayGame[$i]["vist_points"]; ?>    </li>
      <?php endfor; ?>
    </ul>
</body>
</html>