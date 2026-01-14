<?php

$this->barraUbi = [
			[
				"texto" => "Inicio", 
				"enlace" => ["inicial"]
			],
			[
				"texto" => "Practica2", 
				"enlace" => ["pract2", "index"]
			],
			[
				"texto" => "Descarga1", 
				"enlace" => ["pract2", "descarga1"]
			]
		];

    if(isset($_POST["descargar"])){
        header("Content-Disposition: attachment; filename=descarga.txt");
        header("Content-Type: text/plain");
        echo "Fichero descargado.\n";  
        exit;  
    }

    echo CHTML::iniciarForm("descarga1","post");
    echo CHTML::boton("Descargar fichero",["type" => "submit","name" => "descargar"]);
    echo CHTML::finalizarForm();