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
                "texto" => "Ejercicio 7",
                "enlace" => ["pract1", "ejer7"]
            ]
		];

      echo CHTML::dibujaEtiqueta("p",[],"Fecha actual formato 'd/m/Y': ".$fecha);
      echo CHTML::dibujaEtiqueta("p",[],"Fecha actual formato 'dia,mes,año, dia de la semana': ".$fechaLarga);
      echo CHTML::dibujaEtiqueta("p",[],"Fecha Fija 1º formato ".$fechaFija);
      echo CHTML::dibujaEtiqueta("p",[],"Fecha Fija 2º formato ".$fechaFija2);
      echo CHTML::dibujaEtiqueta("p",[],"Fecha Fija 3º formato". $fechaFija3);
      echo CHTML::dibujaEtiqueta("p",[],"Fecha actual menos 12 días y 4 horas formato 'd/m/Y': ".$fechaMenos);
      echo CHTML::dibujaEtiqueta("p",[],"Fecha actual menos 12 días y 4 horas formato 'dia,mes,año ,dia de la semana': ".$fechaMenos2);
      echo CHTML::dibujaEtiqueta("p",[],"Fecha actual menos 12 días y 4 horas formato 'hh:mm:ss': ".$fechaMenos3);   
      
