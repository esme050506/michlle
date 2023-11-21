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
        <input type="TEXT" name="dic" placeholder="direccion"><br>
        <input type="int" name="tel" placeholder="telefono"><br>
        <input type="submit" name="register" value="enviar">
        <input type="submit" name="consultar1" value="consultar">
        <img src="tienda.jpg" class="img2"> <hr>
    </form>
    <?php
    include("registar1.php");
    ?>

<button onclick="location.href='tes.php'">Regresar</button>>
    
   <?php 
$conex = mysqli_connect("localhost","root","","alamacen4"); 
$consulta ="SELECT * FROM  clientes";
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
        echo"<th>direccion</th>";
        echo"<th>telefono</th>";
        echo "</tr>";
        while($columna=mysqli_fetch_array($resultado))
        {
            echo "<tr>";
echo "<td>".$columna['id_cliente']."</td><td>".$columna['nombre']."</td><td>".$columna['direccion']."</td><td>".$columna['telefono']."</td>";
            echo "</tr>";
        }
        echo"</table>";

       }
    mysqli_close($conex);

                                                                     
?>

</body>
</html>
