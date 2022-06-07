<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi.
Ogni punto un nuovo paragrafo. -->



<?php 

  $paragrafo ='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae sapiente in, suscipit totam eligendi tempore voluptates, distinctio explicabo neque accusantium, iste corporis veritatis! Fugiat aliquam illum porro molestiae culpa vitae. Odio error perferendis tenetur. Voluptas est neque iusto aperiam quis culpa reiciendis molestias delectus doloribus beatae nisi ad voluptates explicabo aliquid nihil saepe tempore, numquam totam ut, laboriosam vero! Possimus rem eius sed quod dolor nisi recusandae voluptatibus, delectus sdd imilique, maiores, aliquid eveniet nulla. Expedita explicabo molestiae ut alias id quia doloremque. Tempore quaerat aperiam omnis voluptatum odit. Cum eligendi architecto quidem aliquam. Perferendis voluptatem repellat dolorem sed, incidunt doloremque.';

  $paragrafo_diviso = explode('.' , $paragrafo);


  var_dump($paragrafo_diviso)
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>paragrafo</title>
</head>
<body>
  <h2>paragrafo intero </h2>
  <p>
    <?php echo $paragrafo ?>
  </p>
  
  <h2>paragrafo diviso</h2>

  <ul>
    <?php
        for ($i=0;$i<count($paragrafo_diviso);$i++):
          if(strlen($paragrafo_diviso[$i]) >= 1) {
      ?>
        <li><?php echo $paragrafo_diviso[$i];?> </li>
    <?php  } endfor ?>
  </ul>
</body>
</html>