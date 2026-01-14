<?php
	 
class pract2Controlador extends CControlador
{
	public array $menuizq=[];
	public array $barraUbi=[];

	public function __construct()
	{
		parent::__construct();
		
		$this->menuizq = [
			[
				"texto" => "Inicio", 
				"enlace" => ["inicial"]
			],
			[
				"texto" =>"MiError",
				"enlace" => ["pract2","mierror"]
			],
			[
			    "texto" => "Descarga1",
				"enlace"=> ["pract2","descarga1"]
			],
			[
				"texto"=> "Descarga2",
				"enlace"=> Sistema::app()->generaURL("descarga2",[])
			],
			[
				"texto"=> "PedirDatos",
				"enlace"=> ["pract2","ajax"]
			]
		];
	}

	public function accionIndex()
	{

		$this->barraUbi = [
			[
				"texto" => "Inicio", 
				"enlace" => ["inicial"]
			],
			[
				"texto" => "Practica2", 
				"enlace" => ["pract2", "index"]
			]
		];

		

		$this->dibujaVista("index",[],
							"Pagina principal");
	}

	// ---------- Ejer Err -----------------
	
	public function accionmierror(){
		Sistema::app()->paginaError(404,"No seas malo y no accedas a la pagina");
	}

	// ---------- Ejer Descarga -----------------

	public function acciondescarga1(){
		$this->dibujaVista("descarga1",[],"Descarga");
	}

	public function acciondescarga2(){
		header("Content-Disposition: attachment; filename=descarga.txt");
        header("Content-Type: text/plain");
        echo "Fichero descargado2.\n";  
		exit;
	}

	// ---------- Ejer PedirDatos -----------------

	public function accionajax(){
		$this->dibujaVista("ajax",[],"Pedir Datos");
	}

	public function accionpedirDatos(){
		
		// 1. Recoger parámetros 
		$min = intval($_REQUEST["min"] ?? 0); 
		$max = intval($_REQUEST["max"] ?? 0); 
		$patron = $_REQUEST["patron"] ?? ""; 
		// 2. Generar array de números aleatorios entre min y max 
		$numeros = []; 
		for ($i = 0; $i < 10; $i++) {
			 $numeros[] = rand($min, $max); 
		} 
		// 3. Generar palabras basadas en el patrón 
		$palabras = [];
		 $longitud = strlen($patron); if ($longitud >= 2) { 
			$primera = $patron[0]; $ultima = $patron[$longitud - 1]; 
			for ($i = 0; $i < 10; $i++) { $palabra = $primera; 
				// Caracteres intermedios aleatorios 
				for ($j = 1; $j < $longitud - 1; $j++) { $palabra .= chr(rand(97, 122)); 
				// letras a-z 
				} 
				$palabra .= $ultima; $palabras[] = $palabra; 
				} 
			} 
			// 4. Construir el JSON final 
			$respuesta = [ "numeros" => $numeros, "palabras" => $palabras ]; 
			// 5. Devolver JSON 
			header("Content-Type: application/json"); echo json_encode($respuesta); 
			exit;
	}
}

