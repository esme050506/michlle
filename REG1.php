                  <?php

 

include("condb1.php");

 

if (isset($_POST['register'])) {

           if (strlen($_POST['ID']) >= 1 && strlen($_POST['num']) >= 1) {

                    $ID = trim($_POST['ID']);

                    $num = trim($_POST['num']);
                    $fecha = trim($_POST['fecha']);
                    $hora = trim($_POST['hora']);
                    $com = trim($_POST['com']);
                    $res = trim($_POST['res']);
                    
                    $consulta="INSERT INTO comentarios(num_comentaro,id_usuario,fecha,hora,texto,respuesta) values ('$ID','$num','$fecha','$hora','$com','$res')";


         $verificar_ID=mysqli_query($conex,"SELECT * FROM comentarios WHERE  num_comentaro='$ID'");

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