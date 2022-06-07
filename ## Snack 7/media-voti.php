<!-- Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
  Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


  <?php 
  
  $arrayClass = [
    [
      "nome" => 'Boston ',
      "cognome" => ' Wizard',
      $vote = [5 , 7 , 10 , 3 , 8]
    ],

    [
      "nome" => 'Maverick',
      "cognome" => 'Orlando ',
      $vote = [5 , 7 , 10 , 3 , 8]
    ],

    [
      "nome" => 'Sacramento ',
      "cognome" => 'Memphis',
      $vote = [5 , 7 , 10 , 3 , 8]
    ],

    [
      "nome" => 'Sea ',
      "cognome" => 'Pelicans',
      $vote = [5 , 7 , 10 , 3 , 1]
    ],

    [
      "nome" => 'Huston Comets',
      "cognome" => 'Santa Cruz Warriors',
      $vote = [5 , 7 , 10 , 3 , 5]
    ]
    
    ];

    for ($i=0; $i <count($vote) ; $i++) { 
      $number = array_sum($vote) / count($vote);

    };

    var_dump($number);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prima A</title>
</head>
<body>
    <ul>
      <?php
      for ($i=0; $i < count($arrayClass) ; $i++): ?>
            <li><?php echo $arrayClass[$i]["nome"]; ?> - <?php echo $arrayClass[$i]["cognome"];  ?> - <?php echo $number;  ?> |</li>
      <?php endfor; ?>
    </ul>
</body>
</html>