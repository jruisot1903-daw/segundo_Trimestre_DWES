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
			]
		];


echo CHTML::dibujaEtiqueta("p",[],"Round: ".$round);
echo CHTML::dibujaEtiqueta("p",[],"Floor: ".$floor);
echo CHTML::dibujaEtiqueta("p",[],"Pow: ".$pow);
echo CHTML::dibujaEtiqueta("p",[],"Sqrt: ".$sqrt);
echo CHTML::dibujaEtiqueta("p",[],"Dechex: ".$dechex);
echo CHTML::dibujaEtiqueta("p",[],"Base_convert: ".$base_convert);
echo CHTML::dibujaEtiqueta("p",[],"Abs: ".$abs);
echo CHTML::dibujaEtiqueta("p",[],"Max: ".$max);
echo CHTML::dibujaEtiqueta("p",[],"Binario: ".$binario);
echo CHTML::dibujaEtiqueta("p",[],"Octal: ".$octal);