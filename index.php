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
      <form action="cadastro.php" method="get">
         <h3>Informe um número</h3>
         <input type="number" name="numero" id="numero" required>

         <p id="erro">Você precisa digitar um número</p>

         <input class="btn-submit" type="submit" value="Enviar">
      </form>
   </section>

</body>
</html>