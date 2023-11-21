
<!DOCTYPE html>
<html>
<head>
    <title>Registrar productos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo1.css">
</head>

<body>
    <form method="post">
        <h1>Formulario productos</h1>
        <img src="rosa.jpg" class="img1"> <hr>
        <input type="int" name="ID" placeholder="id productos"><br>
        <input type="TEXT" name="name" placeholder="descripcion"><br>
         <input type="int" name="ape" placeholder="precio"><br>
        <input type="int" name="dic" placeholder="idcategoria"><br>
         <input type="int" name="pob" placeholder="idprovedor"><br>
        <input type="submit" name="consultar1" value="consultar">
        <img src="tienda.jpg" class="img2"> <hr>
    </form>
    <?php
    include("registar1.php");
    ?>
    
   <?php 
$conex = mysqli_connect("localhost","root","","alamcen"); 
$consulta ="SELECT * FROM  productos";
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
        echo"<th>codigo producto</th>";
        echo" <th>descripcion</th>";
        echo"<th>precio</th>";
        echo"<th>categoria id</th>";
        echo"<th>provedor id</th>";

        echo "</tr>";
        while($columna=mysqli_fetch_array($resultado))
        {
            echo "<tr>";
echo "<td>".$columna['id_productos']."</td><td>".$columna['descripcion']."</td><td>".$columna['precio']."</td><td>".$columna['id_categoria']."</td><td>".$columna['id_proveedor']."</td>";
            echo "</tr>";
        }
        echo"</table>";

       }
    mysqli_close($conex);

                                                                     
?>
<?php
    include("registar1.php");
    ?>

<button onclick="location.href='tes.php'">Regresar</button>
</body>
</html>