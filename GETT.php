<?php
if(isset($_GETT['palabra1']) && isset ($_GETT['palabra2'])){
    echo "El que juega con ". $_GETT['palabra1'] . "termina" . $_GETT['palabra2'];
}else{
    echo "No recibio ningun nombre"
}
?>