<!DOCTYPE html>
<html>
<head>
    <title>Registrar PRODUCTOS</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo1.css">
</head>

<body>
    <form method="post">
        <h1>Formulario PRODUCTO</h1>
        <img src="rosa.jpg" class="img1"> <hr>
        <input type="int" name="ID" placeholder="id de producto"><br>
        <input type="int" name="nom" placeholder="nombre o descripcion"><br>
        <input type="int" name="can" placeholder="cantidad"><br>
        <input type="DATE" name="fecha" placeholder="fecha"><br>
        <input type="submit" name="register" value="enviar">
        <input type="submit" name="consultar1" value="consultar">
        <img src="tienda.jpg" class="img2"> <hr>
    </form>
    <?php
    include("registar3.php");
    ?>
    <?php 
$conex = mysqli_connect("localhost","root","","tiendavirtual"); 
$consulta ="SELECT * FROM  producto";
$resultado = mysqli_query($conex,$consulta);
$total=mysqli_num_rows($resultado);
if(isset($_POST['consultar1']))
{
    $ID=$_POST['ID'];
 if($ID>$total){echo"en numero de eregistro no existe!!! el valor maximo es ".$total;}   
if($ID <= 1);
if($ID ==""){echo"dijita un numero valido porfavor!!!";}




        echo "<center><table width =\"95%\" border=\"1\"align=\"center\">";
        echo" <tr>";
        echo"<th>codigo producto</th>";
        echo" <th>nombre</th>";
        echo"<th>cantidad</th>";
        echo"<th>fecha</th>";
        echo "</tr>";
        while($columna=mysqli_fetch_array($resultado))
        {
            echo "<tr>";
echo "<td>".$columna['codigo_producto']."</td><td>".$columna['nombre']."</td><td>".$columna['cantidad']."</td><td>".$columna['fecha']."</td>";
            echo "</tr>";
       }
       echo"</table>";
   }

    mysqli_close($conex);

  
                                                                     
?>

</body>
</html>