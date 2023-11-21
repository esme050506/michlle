<!DOCTYPE html>
<html>
<head>
    <title>Registrar CLIENTESC</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo1.css">
</head>

<body>
    <form method="post">
        <h1>Formulario CLIENTE</h1>
        <img src="rosa.jpg" class="img1"> <hr>
        <input type="int" name="ID" placeholder="id cliente"><br>
        <input type="TEXT" name="name" placeholder="nombre"><br>
         <input type="text" name="ape" placeholder="apellidos"><br>
        <input type="TEXT" name="dic" placeholder="direccion"><br>
         <input type="text" name="pob" placeholder="poblacion"><br>
        <input type="INT" name="cod" placeholder="codigo postal"><br>
         <input type="DATE" name="fechanacimiento" placeholder="fecha de nacimiento"><br>
        <input type="submit" name="register" value="enviar">
        <input type="submit" name="consultar1" value="consultar">
        <img src="tienda.jpg" class="img2"> <hr>
    </form>
    <?php
    include("registar1.php");
    ?>
    
   <?php 
$conex = mysqli_connect("localhost","root","","tiendavirtual"); 
$consulta ="SELECT * FROM  cliente";
$resultado = mysqli_query($conex,$consulta);
$total=mysqli_num_rows($resultado);
if(isset($_POST['consultar1']))
{
    $ID=$_POST['ID'];
 if($ID>$total){echo"en numero de eregistro no existe!!! el valor maximo es ".$total;}   
if($ID <= 1);
if($ID ==""){echo"dijita un numero valido porfavor!!!";}


        echo "<center>
        <table width =\"100%\" border=\"1\"align=\"center\">";
        echo" <tr>";
        echo"<th>codigo cliente</th>";
        echo" <th>nombre</th>";
        echo"<th>apellidos</th>";
        echo"<th>apellidos</th>";
        echo"<th>direccion</th>";
        echo"<th>poblacion</th>";
        echo"<th>codigo postal</th>";
        echo "</tr>";
        while($columna=mysqli_fetch_array($resultado))
        {
            echo "<tr>";
echo "<td>".$columna['IDCLIENTE']."</td><td>".$columna['NOMBRE']."</td><td>".$columna['APELLIDOS']."</td><td>".$columna['DIRECCION']."</td><td>".$columna['POBLACION']."</td><td>".$columna['CODIGOPOSTAL']."</td><td>".$columna['FECHADENACIMENTO']."</td>";
            echo "</tr>";
        }
        echo"</table>";

       }
    mysqli_close($conex);

                                                                     
?>
<?php
    include("registar1.php");
    ?>
</body>
</html>
