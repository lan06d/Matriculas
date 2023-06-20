<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usurio']=$usuario;
include('conexion.php');
$consulta="SELECT*FROM usuario WHERE usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:index.html");
}else{
    ?>
    <?php
    include("login.html");
    ?>
    <h1> </h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
