<?php

$this->barraUbi = [
			[
				"texto" => "Inicio", 
				"enlace" => ["inicial"]
			],
			[
				"texto" => "Practica1", 
				"enlace" => ["pract1", "MiIndice"]
			],
			[
				"texto" => "Ejercicio 1", 
				"enlace" => ["pract1", "ejer1"]
            ],
            [
                "texto" => "Ejercicio 2",
                "enlace" => ["pract1", "ejer2"]
            ],
            [
                "texto" => "Ejercicio 3",
                "enlace" => ["pract1", "ejer3"]
            ]
		];

       foreach ($arr as $index => $subArray) {
    echo  CHTML::dibujaEtiqueta("h3",[] ,"Array " . ($index + 1));
    foreach ($subArray as $clave => $valor) {
        if (is_array($valor)) {
            echo  CHTML::dibujaEtiqueta("p",[], "$clave => [ " . implode(", ", $valor) . " ]<br>");
        } else {
            echo  CHTML::dibujaEtiqueta("p",[], "$clave => $valor<br>");
        }
    }
    echo "<hr>";
}

    