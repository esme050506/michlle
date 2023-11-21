<?php

 

include("condb1.php");

 

if (isset($_POST['register'])) {

    if (strlen($_POST['ID']) >= 1 && strlen($_POST['nom']) >= 1) {

                    $ID = trim($_POST['ID']);
                    $nom = trim($_POST['nom']);
                    $can = trim($_POST['can']);

                    $fecha = date("d/m/y");

                    $consulta="INSERT INTO producto(codigo_producto,nombre,cantidad,fecha) values('$ID','$nom','$can','$fecha')";


         $verificar_ID=mysqli_query($conex,"SELECT * FROM producto WHERE 	codigo_producto='$ID'");

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