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
    echo "<br>";
    echo CHTML::link("index ejercicio 1",["ejer1","index"]);
    echo "<br>";
    echo CHTML::link("index ejercicio 1 parametro",
                    Sistema::app()->generaURL(["ejer1","index"],["id"=>12]),
                    ["id"=>"enlace"]);
                    //el id 12 es para el generaURL y el id enlace hace referencia al id del <a> que creamos 