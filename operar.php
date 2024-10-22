<?php
$resultUpdate = mysqli_query($mysqli, $consulta); 
 
         if($resultUpdate)
         {
            echo "<strong>El registro ID ".$var2." con exito</strong>. <br>";
            ?>
            <script type="text/javascript">
            alert('Realizada  Correctamente la accion Ante el registro, asociado con..<?php echo $var2 ?>');
            setTimeout(history.back(), 3000)
            </script> 
            <?php
            $mysqli->close();
             exit;
         }
         else
         {
            echo "No se pudo Realizar la accion ante  el registro. <br>";
            ?>
            <script type="text/javascript">
            alert('No se Pudo Realizar la Accion');
            setTimeout(history.back(), 3000)
            </script> 
            <?php
             exit;
         }
         ?>