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
                "texto" => "Ejercicio 5",
                "enlace" => ["pract1", "vistaejer5"]
            ]
		];


        foreach ($vector as $key => $valor) { 
            $tipo = gettype($valor);

            $this->dibujaVistaParcial("vistaejer5-parte",["key"=>$key,"valor"=>$valor,"tipo"=>$tipo]);
        }