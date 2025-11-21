<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

   <section>
      <form id="form" action="resultado.php" method="get">
         <h3>Digite um número</h3>
         <input type="number" name="numero" id="numero">

         <p id="erro">Você precisa digitar um número!</p>

         <input class="btn-submit" type="submit" value="Enviar">
      </form>
   </section>

   <script src="script.js"></script>
</body>
</html>