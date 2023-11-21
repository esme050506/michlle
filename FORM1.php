
<!DOCTYPE html>
<html>
<head>
    <title>Registrar categoria</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo1.css">
</head>

<body>
    <form method="post">
        <h1>Formulario categoria</h1>
        <img src="rosa.jpg" class="img1"> <hr>
        <input type="int" name="ID" placeholder="id categoria"><br>
        <input type="TEXT" name="des" placeholder="descripcion"><br>
        <input type="submit" name="register" value="enviar">
        <input type="submit" name="consultar1" value="consultar">

        <img src="tienda.jpg" class="img2"> <hr>
    </form>
    <?php
    include("registrar4.php");
    ?>
    
   <?php 
$conex = mysqli_connect("localhost","root","","alamacen4"); 
$consulta ="SELECT * FROM  categoria";
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
        echo"<th>codigo categoria</th>";
        echo" <th>descripcion</th>";
        echo "</tr>";
        while($columna=mysqli_fetch_array($resultado))
        {
            echo "<tr>";
echo "<td>".$columna['id_categoria']."</td><td>".$columna['descripcion']."</td>";
            echo "</tr>";
        }
        echo"</table>";

       }
    mysqli_close($conex);

                                                                     
?>

<button onclick="location.href='tes.php'">Regresar</button>
</body>
</html>


