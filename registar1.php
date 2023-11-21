<?php

 

include("condb1.php");

 

if (isset($_POST['register'])) {

    if (strlen($_POST['ID']) >= 1 && strlen($_POST['name']) >= 1) {
      $ID=trim($_POST['ID']);
$name=trim($_POST['name']);
$dic=trim($_POST['dic']);
$tel=trim($_POST['tel']);

                   


                    $consulta="INSERT INTO clientes(id_cliente,nombre,direccion,telefono) values('$ID','$name','$dic','$tel')";


         $verificar_ID=mysqli_query($conex,"SELECT * FROM clientes WHERE 	id_cliente='$ID'");

                    if(mysqli_num_rows($verificar_ID)>0){

                               ?>


                               <h3 class="bad">¡estte registro ya existe,intente agregar otro diferente!</h3>

                               <?php
                               exit();

                    }

                    $resultado = mysqli_query($conex,$consulta);

                    if ($resultado) {

                               ?>

                               <?php





}?>

                               <h3 class="ok">¡Te has inscripto correctamente!</h3>

           <?php

                    } else {

                               ?>

                               <h3 class="bad">¡Ups ha ocurrido un error!</h3>

           <?php

                    }

    }   


 

?>