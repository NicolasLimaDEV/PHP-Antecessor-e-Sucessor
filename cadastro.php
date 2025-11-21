<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php 
      $num = $_GET["numero"];

      $numACC = $num +1;
      $numDEC = $num -1;
   ?>

   <div class="content-final">
      <h1>Resultador Final</h1>
      <p>Número digitado: <?= $num ?></p>
      <p>Número <span>sucessor</span>: <?= $numACC ?></p>
      <p>Número <span>antecessor</span> <?= $numDEC ?></p>

      <a href="index.php">Voltar</a>
   </div>

</body>
</html>