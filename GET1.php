<?php
if(isset($_GET1['palabra1']) && isset ($_GET1['palabra2'])){
    echo "El que juega con ". $_GET1['palabra1'] . "termina" . $_GET1['palabra2'];
}else{
    echo "No recibio ningun nombre"
}
?>