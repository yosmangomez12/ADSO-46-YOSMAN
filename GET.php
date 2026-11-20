<?php
 if (isset($_GET['nombre'])) {
     echo "Hola " .$_GET['nombre'];
 } else {
     echo "no recibio ningun nombre";
 }

?>