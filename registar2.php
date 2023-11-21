<?php

 

include("condb1.php");

 

if (isset($_POST['register'])) {

    if (strlen($_POST['ID']) >= 1 && strlen($_POST['id_cli']) >= 1) {


                    $ID = trim($_POST['ID']);
                    $fechadecompra = date("d/m/y");
                      $id_cli = trim($_POST['id_cli']);


                    $consulta="INSERT INTO facturas(id_factura,fecha,id_cliente) values('$ID','$'fechadecompra','$id_cli')";


         $verificar_ID=mysqli_query($conex,"SELECT * FROM facturas WHERE  id_factura='$ID'");

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