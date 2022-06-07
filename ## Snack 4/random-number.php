<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 

function getUniqueRandomNumber($min, $max, $nItems){

$arrayNumber=[];

if($max < $min){
  $tmp = $max;
  $max = $min;
  $min = $tmp;
}

if($nItems > ($max - $min)){
  $nItems = $max - $min + 1;
}

for ($i=0; count($arrayNumber) < $nItems ; $i++) { 
  $number = rand($min,$max);

  if(!in_array($number, $arrayNumber))
  $arrayNumber[] = $number;
};

return $arrayNumber;
}

$randomNumbersArray= getUniqueRandomNumber(100, 20, 15 );
var_dump($randomNumbersArray);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>

    <?php for($i=0; $i<count($randomNumbersArray);$i++): ?>

      <li><?php echo $randomNumbersArray[$i] ?></li>            

    <?php endfor; ?> 

  </ul>
</body>
</html>


