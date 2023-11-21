<!DOCTYPE html>
<html>
<head>
    <title>Registrar producto</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo1.css">
</head>

<body>
    <form method="post">
        <h1>Formulario producto</h1>
        <img src="rosa.jpg" class="img1"> <hr>
        <input type="int" name="ID" placeholder="id producto"><br>

        <input type="submit" name="consultar1" value="consultar">
        <img src="tienda.jpg" class="img2"> <hr>
    </form>
    <?php



       
         $conex=mysqli_connect("localhost","root","","alamacen4");
         $consulta= "SELECT * FROM productos";
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
            $consulta1= "SELECT * FROM productos WHERE id_productos= $ID";
            $resultados=mysqli_query($conex, $consulta1);
       

            if (mysqli_num_rows($resultados) > 0) {
                $row = mysqli_fetch_assoc($resultados);
             $id_actual = $row['id_productos'];
                $nombre_actual = $row['descripcion'];
                $direccion_actual = $row['precio'];
                $pob_actual = $row['id_categoria'];
                $cp_actual = $row['id_proveedor'];
            }

       
     
               
       
         
         
       }

       mysqli_close($conex);
       }
       ?>
     <form method='post' class='op1'>
        <h1>Modifcar un registro!</h1>

           <input type='int' name='ID' value="<?php echo $id_actual; ?>" placeholder="ID">
        <input type='text' name='name' value="<?php echo $nombre_actual; ?>"placeholder="descripcion">
           <input type='text' name='direc' value="<?php echo $direccion_actual; ?>"placeholder="precio">
        <input type='int' name='pob' value="<?php echo $pob_actual; ?>"placeholder="ID Categoria">
           <input type='int' name='cp' value="<?php echo $cp_actual; ?>"placeholder="ID Provedor">

        <input type='submit' name='modificar' placeholder='Modificar'>
    </form>


       <?php

$conex = mysqli_connect("localhost","root","","alamacen4");

if (isset($_POST['modificar']))
{

$ID = trim($_POST['ID']);

$name = trim($_POST['name']);

$direc = trim($_POST['direc']);

$pob = trim($_POST['pob']);

 $cp = trim($_POST['cp']);
                 
$consulta=" UPDATE  productos SET descripcion = '$name', precio='$direc', id_categoria='$pob', id_proveedor='$cp' WHERE id_productos = '$ID'";

                    $resultado = mysqli_query($conex,$consulta);

                    if ($resultado) { ECHO "ACTUALIZACION COMPLETA";}
                    ELSE {ECHO "HUBO UN ERROR";}
}
MYSQLI_CLOSE($conex);

?>

<button onclick="location.href='tes.php'">Regresar</button>
</body>
</html>