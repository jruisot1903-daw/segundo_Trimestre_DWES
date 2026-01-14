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
                "texto" => "Ejercicio 2",
                "enlace" => ["pract1", "ejer2"]
            ]
		];

    foreach ($resutl as $resultado) { 
        echo CHTML::dibujaEtiqueta("p", [], "Lado {$resultado['lado']}: {$resultado['cantidad']} con un porcentaje de {$resultado['porcentaje']}%"); 
    }