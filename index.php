<?php

    // Validamos si ya se ejecuto el instaldor ya se ejecuto.
    // Revisado si el archivo instaldo.txt se encuentra creado en la carpeta config
    
    if (!file_exists("traductor/Config/instalado.txt")){
        
        // Si el archivo no esxiste ejecutamos el instalador.
        header('Location: instalador/instalador.php');

    }else{
        
        // LLamamos al inio de la paginas
        header('Location: traductor/index.php');

    }
?>