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
				"texto" => "Pedir Datos", 
				"enlace" => ["pract2", "ajax"]
			]
		];
	//EJEMPLO DE CLASE
		$this->textoHead=CHTML::scriptFichero("/js/pedirDatos.js",["defer" => "defer"]); 
		// de esta forma hacemos que se cargue el js en el html

		// echo CHTML::iniciarForm("","get",["id"=>"id_form"]);
		// echo CHTML::campoBotonSubmit("Enviar",["id"=>"btEnvi"]);
		// echo CHTML::finalizarForm();
		// echo "<br><br>".PHP_EOL;
		// echo CHTML::dibujaEtiqueta("p",["id"=>"id_result","Resultado"]);

	//PRACTICA
        echo CHTML::dibujaEtiqueta("label",[],"Introduce el Minimo: ");
		echo CHTML::campoNumber("min","",["id" => "min"]);
		echo "<br>";

		echo CHTML::dibujaEtiqueta("label",[],"Introduce el Maximo: ");
		echo CHTML::campoNumber("max","",["id" => "max"]);
		echo "<br>";

		echo CHTML::dibujaEtiqueta("label",[],"Introduce el Patrón: ");
		echo CHTML::campoText("cadena","",["id" => "cadena"]);
		echo "<br>";

		echo CHTML::campoBotonSubmit("Enviar",["id"=>"btPedi"]);
		echo "<br>";
		echo "<br>";

		echo CHTML::dibujaEtiqueta("div",["id" => "result"],"");

	

       