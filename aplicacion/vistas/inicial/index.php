<?php
    echo "<br/>";

    echo "Hola mundo.";
    echo "<br/>";
    echo "<br/>".PHP_EOL;

    echo "funciona que no es poco";
    
    echo Sistema::app()->generaURL(["usuarios","index"]);
    echo "<br>";
    echo CHTML::link("modificar usuario",["usuarios","modificar"]);
    echo "<br>";
    echo CHTML::link("borrar usuario",["usuarios","borrar"]);