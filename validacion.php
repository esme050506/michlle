<?php
$nombre=$_POST['nombre'];
    $contra=$_POST['contra'];

    $conex=mysqli_connect("localhost","root","","alamacen4");
    $consulta="SELECT * FROM administrador WHERE nombre='$nombre' and contraseña='$contra'";
    $resultado=mysqli_query($conex,$consulta);
    $filas=mysqli_num_rows($resultado);    
    if ($filas > 0) {
    header("location:tes.php");
    }
    else{
    ?>
    <?php
    include("index.php")
?>
<h1 class="bad">Error en los datos, intentalo de nuevo</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conex);
?>