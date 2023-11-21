<!DOCTYPE html>
<html>
<head>
    <title>Registrar CLIENTES</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo1.css">
</head>

<body>
    <form method="post">
        <h1>Formulario clientes</h1>
        <img src="rosa.jpg" class="img1"> <hr>
        <input type="int" name="ID" placeholder="id clientes"><br>
        <input type="submit" name="consultar1" value="consultar">
        <img src="tienda.jpg" class="img2"> <hr>
    </form>
  <?php



       
         $conex=mysqli_connect("localhost","root","","alamacen4");
         $consulta= "SELECT * FROM clientes";
         $resultado=mysqli_query($conex,$consulta);
         $total=mysqli_num_rows($resultado);

         $id_actual = "";
$nombre_actual = "";
$direccion_actual = "";
$pob_actual = "";
$cp_actual = "";


    if (isset($_POST['consultar1'])) {
        $ID=$_POST['ID'];

        if ($ID>$total){
            echo "El numero de resgistro no existe!!! el valor maximo es: ".$total;}
        if ($ID<= 0){ echo "El numero de registro no existe!!!";}
        if ($ID=="")
           { echo "Digita un numero valido por favor!!!";}
        else
        {
            $consulta1= "SELECT * FROM clientes WHERE id_cliente= $ID";
            $resultados=mysqli_query($conex, $consulta1);
       

            if (mysqli_num_rows($resultados) > 0) {
                $row = mysqli_fetch_assoc($resultados);
             $id_actual = $row['id_cliente'];
                $nombre_actual = $row['nombre'];
                $direccion_actual = $row['direccion'];
                $pob_actual = $row['telefono'];

            }else{
                ?><h1>el registro <?php echo $id_actual;?>hasido eliminado</h1>
                    <?php
            }

       
     
               
       
         
         
       }

       mysqli_close($conex);
       }
       ?>
     <form method='post' class='op1'>
        <h1>borar datos</h1>

           <input type='int' name='ID' value="<?php echo $id_actual; ?>" placeholder="ID">
        <input type='text' name='name' value="<?php echo $nombre_actual; ?>"placeholder="nombre">
        <input type='text' name='dic' value="<?php echo $direccion_actual; ?>"placeholder="direccion">
        <input type='text' name='tel' value="<?php echo $pob_actual; ?>"placeholder="telefono">

        <input type="submit" name="modificar" value="boarrar">
    </form>


       <?php

$conex = mysqli_connect("localhost","root","","alamacen4");

if (isset($_POST['modificar']))
{
    $ID=$_POST["ID"];
        $ssql= "DELETE FROM  categoria   WHERE id_categoria = '$ID'";
        //Envía una consulta a la base de datos 
          $resultados = mysqli_query($conex,$ssql);
        if ($resultados) {echo "Se ha borrado el registro: ".$ID;}
          else{echo "hubo un error!";}

}
MYSQLI_CLOSE($conex);

?>

<button onclick="location.href='tes.php'">Regresar</button>
</body>
</html>