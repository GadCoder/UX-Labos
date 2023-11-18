<?php

if(isset($_POST['categoria'])){

    $lista = $_POST['categoria']
    foreach ($lista as $categoria) {
        echo $categoria . "<br>"
    }
} else {
    echo "No se seleccionaron categorías"
}