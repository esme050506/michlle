
<!DOCTYPE html>
<html>
<head>
    <title>Registrar FACTURA</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo1.css">
</head>

<body>
    <form method="post">
        <h1>Formulario FACTURA</h1>
        <img src="rosa.jpg" class="img1"> <hr>
        <input type="int" name="ID" placeholder="id_factura"><br>
        <input type="date" name="fecha" placeholder="fecha"><br>
         <input type="int" name="id_c" placeholder="id_cliente"><br>
        <input type="submit" name="regisvater" lue="enviar">
        <input type="submit" name="consultar1" lue="consulta">
        <img src="tienda.jpg" class="img2"> <hr>
    </form>
    <?php
    include("registar1.php");
    ?>

<button onclick="location.href='tes.php'">Regresar</button>
    
   <?php 
$conex = mysqli_connect("localhost","root","","alamacen4"); 
$consulta ="SELECT * FROM  facturas";
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
        echo"<th>codigo factura</th>";
        echo" <th>nfecha</th>";
        echo"<th>id cliente</th>";
        echo "</tr>";
        while($columna=mysqli_fetch_array($resultado))
        {
            echo "<tr>";
echo "<td>".$columna['id_factura']."</td><td>".$columna['fecha']."</td><td>".$columna['id_cliente']."</td>";
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
