<?php
//creamos las variables
$servername = "192.168.0.100";
$database = "gamePPT";
$username = "gamePPT";
$password = "12345678";
// Creamos la conexion
$conn = mysqli_connect($servername, $username, $password, $database);
// verificamos la conexion
if (!$conn) {
    die("Conexión fallida :(: " . mysqli_connect_error());
}
echo "conectado a dataBase";

/////enviar datos

///condiciones de ingreso a db
///boton piedra
$opcion_piedra=$_POST["inputPiedra"];
$opcion_papel=$_POST["inputPapel"];
$opcion_tijera=$_POST["inputTijera"];
$reset ="DELETE FROM opciones WHERE id >'1' ";

if($opcion_piedra==1){
  $sql="UPDATE opciones SET jugador='piedra'";
  $resultado=mysqli_query($conn,$sql);
  if($resultado){ 
  ?>
<h3 class="ok"
>¡HAZ Tirado!</h3>
<?php 
  }
} 

if($opcion_papel==1){
  $sql="UPDATE opciones SET jugador='papel'";
  $resultado=mysqli_query($conn,$sql);
  if($resultado){ 
  ?>
<h3 class="ok"
>¡HAZ Tirado!</h3>
<?php 
  }
} 
if($opcion_tijera==1){
  $sql="UPDATE opciones SET jugador='Tijera'";
  $resultado=mysqli_query($conn,$sql);
  if($resultado){ 
  ?>
<h3 class="ok"
>¡HAZ Tirado!</h3>
<?php 
  }
} 

$resetear=mysqli_query($conn, $reset);
?>