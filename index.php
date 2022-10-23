<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Juan David Toloza Ortega"> 
  <meta name="description" content="agregación del multijugador">
  <meta name="keywords" content="juego de piedra, papel y tijera. "/>
  <title>Game v0.1</title>
  <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
  <header>
    <h1 class="titulo"s>PIEDRA, PAPEL Y TIJERA</h1>
  </header>
  <main>
    <section class="container">
      <div id="piedra" class="opcion">PIEDRA</div>
      <div id="papel" class="opcion">PAPEL</div>
      <div id="tijera" class="opcion">TIJERA</div>
      <form method="post" action="con_var.php" class="formulario">
        <input id="inputPiedra" name="inputPiedra" type="text">
        <input id="inputPapel" name="inputPapel" type="text">
        <input id="inputTijera" name="inputTijera" type="text">
        <input type="submit" value="¡TIRAR">
      </form>
      <div id="display">
        
      </div>
    </section>
  </main>
  <footer>
    Desarrollado por Juan David Toloza Ortega
  </footer>
  <?php
  include ("con_var.php") 
  ?>
  <script src="./main.js"></script>
    
</body>
</html>

