<!DOCTYPE html>
<html>
<head>
    <title>Registrar COMPRAS</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo1.css">
</head>

<body>
    <form method="post">
        <h1>Formulario COMPRAS</h1>
        <img src="rosa.jpg" class="img1"> <hr>
        <input type="int" name="ID" placeholder="id de compra"><br>
        <input type="int" name="cli" placeholder="codigo cliente"><br>
        <input type="int" name="pro" placeholder="codigo producto"><br>
        <input type="DATE" name="fechadecompra" placeholder="fecha de compra"><br>
        <input type="int" name="total" placeholder="compra total"><br>
        <input type="submit" name="register" value="enviar">
        <input type="submit" name="consultar1" value="consultar">
       <img src="tienda.jpg" class="img2"> <hr>
    </form>
    <?php
    include("registar2.php");
    ?>
    <?php 
$conex = mysqli_connect("localhost","root","","tiendavirtual"); 
$consulta ="SELECT * FROM  compras";
$resultado = mysqli_query($conex,$consulta);
$total=mysqli_num_rows($resultado);
if(isset($_POST['consultar1']))
{
    $ID=$_POST['ID'];
 if($ID>$total){echo"en numero de eregistro no existe!!! el valor maximo es ".$total;}   
if($ID <= 1);
if($ID ==""){echo"dijita un numero valido porfavor!!!";}


        echo"<center><table width =\"100%\" border=\"2\"align=\"center\">";
        echo" <tr>";
        echo"<th>codigo producto</th>";
        echo" <th>codigo cliente</th>";
        echo"<th>codigo delproducto</th>";
        echo"<th>fecha de compra </th>";
        echo"<th>compra total</th>";
        echo "</tr>";
        while($columna=mysqli_fetch_array($resultado))
        {
            echo "<tr>";
echo "<td>".$columna['IDDECOMPRA']."</td><td>".$columna['CODIGOCLIENTE']."</td><td>".$columna['CODIGOPRODUCTO']."</td><td>".$columna['FECHADECOMPRA']."</td><td>".$columna['COMPRATOTAL']."</td>";
            echo "</tr>";
       }
       echo"</table>";
   }

    mysqli_close($conex);

                                                                     
?>
    
</body>
</html>
