
<!--  Passare come parametri GET name, mail e age e verificare
      (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
      che mail contenga un punto e una chiocciola e che age sia un numero.
      Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php 

var_dump($_GET);
$result = true;
$error = '';

if(empty($_GET['name']) or empty($_GET['mail']) || empty($_GET['age'])){
  $result = false;
  $error = 'inserire tutti i dati';
}elseif(strlen($_GET['name']) < 3){
  $result = false;
  $error = 'il nome deve essere più lungo di 3 caratteri';
}elseif (!strpos($_GET['mail'], '@') || !strpos($_GET['mail'], '.' )){
  $result = false;
  $error = 'inserisci chiocciola e punto';
}elseif(!is_numeric($_GET['age'])){
  $result = false;
  $error = 'deve essere un numero';
}

if($result){
  $output = 'consentito';
}else{
  $output = 'negato';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <h1>Mail control</h1>
    <h2>Il tuo accesso è stato <?php echo $output ?></h2>
    <h3><?php echo $error ?></h3>
</body>
</html>