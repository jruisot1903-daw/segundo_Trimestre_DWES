<?php
	 
class pract1Controlador extends CControlador
{
	public array $menuizq=[];
	public array $barraUbi=[];

	public function __construct()
	{
		parent::__construct();
		
		$this->menuizq=[
			[
				"texto"=>"Inicio",
				"enlace"=>["inicial"]
			],
			[
				"texto"=>"Ejercicio 1",
				"enlace"=>["pract1","Ejer1"]
			],
			[
				"texto"=>"Ejercicio 2",
				"enlace"=>["pract1","Ejer2"]
			],
			[
				"texto"=>"Ejercicio 3",
				"enlace"=>["pract1","Ejer3"]
			],
			[
				"texto"=>"Ejercicio 7",
				"enlace"=>["pract1","Ejer7"]
			],
			[
				"texto"=>"Ejercicio 5",
				"enlace"=>["pract1","Ejer5"]
			]
		];
	}

	public function accionMiIndice()
	{
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
				"texto" => "MiIndice", 
				"enlace" => ["pract1", "MiIndice"]
			]
		];


		$this->dibujaVista("MiIndice",[],
							"Pagina principal");
	}
	
	// ---------- Ejer 1 -----------------
	
	public function accionEjer1()
	{
		//round 
		$round = round(5.045, 2);
		$floor = floor(9.999);
		$pow = pow(2,3);
		$sqrt = sqrt(9);
		$dechex = dechex(47);
		$numBase4 = '100';
		$base_convert = base_convert($numBase4, 4, 8);
		$abs = abs(-4.2);
		$max = max(2, 3, 1, 6, 7);
		$binario = 0b1010;
		$octal   = 012;

		$this->dibujaVista("ejer1",[
			"round"=>$round,
			"floor"=>$floor,
			"pow"=>$pow,
			"sqrt"=>$sqrt,
			"dechex"=>$dechex,
			"base_convert"=>$base_convert,
			"abs"=>$abs,
			"max"=>$max,
			"binario"=>$binario,
			"octal"=>$octal
		],
							"Ejercicio 1");

	}

	// ---------- Ejer 2 -----------------
	
	public function accionEjer2()
	{
		
			for ($i = 0; $i < 6; $i++) { 
				$resultado = mt_rand(1, 6); 
		
			}

			$num = 1000; 

			$conteo = array_fill(1, 6, 0);  

			for ($i = 0; $i < $num; $i++) {
				$lado = mt_rand(1, 6);
				$conteo[$lado]++; 
			}
			$resutl = []; 

			foreach ($conteo as $lado => $cantidad) { 
				$porcentaje = ($cantidad / $num)*100; 
				
				$resutl [] = [
					"lado" => $lado,
					"cantidad" => $cantidad,
					"porcentaje" => $porcentaje
				];
				
			}
			$this->dibujaVista("ejer2",["resutl"=>$resutl],
							"Ejercicio 2");
			
		}

	// ---------- Ejer 3 -----------------
	
	public function accionEjer3(){
		$arrays = [];
		$array1 = [];

		$array1[1] = "Pepe";
		$array1[16] = 123;
		$array1[54] = "Ana";
		$array1[] = 34;
		$array1["uno"]  = "cadena";
		$array1["dos"]  = true;
		$array1["tres"] = 1.345;
		$array1["ultima"] = [1, 34, "nueva"]; 


		$array2 = array(
			1 => "Pepe",
			16 => 123,
			54 => "Ana",
			"uno" => "cadena",
			"dos" => true,
			"tres" => 1.345,
			"ultima" => array(1, 34, "nueva"),
			34
		); 


		$array3 = [
			1 => "Pepe",
			16 => 123,
			54 => "Ana",
			"uno" => "cadena",
			"dos" => true,
			"tres" => 1.345,
			"ultima" => [1, 34, "nueva"],
			34 
		]; 

		array_push($arrays, $array1, $array2, $array3);


		$this->dibujaVista("ejer3",[
			"arr"=>$arrays
		],
							"Ejercicio 3");
	}

	// ---------- Ejer 7 -----------------

	public function accionEjer7(){
		$fecha = new DateTime();
		$fechaLarga = new DateTime();

		
		$fechaFormateada = $fecha->format("d/m/Y");
		$fechaLargaFormateada = $fechaLarga->format("d-m-Y, l");

	
		$fechaFija = DateTime::createFromFormat('d/m/Y H:i', '29/3/2024 12:45');
		$fechaFija2 = clone $fechaFija;
		$fechaFija3 = clone $fechaFija;

		$fechaFijaForm = $fechaFija->format("d/m/Y");
		$fechaFija2Form = $fechaFija2->format("d-m-Y, l");
		$fechaFija3Form = $fechaFija3->format("H:i:s");

		
		$fechaMenos = clone $fecha;
		$fechaMenos->modify('-12 days -4 hours');
		$fechaMenosForm = $fechaMenos->format("d/m/Y");

		$fechaMenos2 = clone $fecha;
		$fechaMenos2->modify('-12 days -4 hours');
		$fechaMenos2Form = $fechaMenos2->format("d-m-Y, l");

		$fechaMenos3 = clone $fecha;
		$fechaMenos3->modify('-12 days -4 hours');
		$fechaMenos3Form = $fechaMenos3->format("H:i:s");

		$this->dibujaVista("ejer7",[
			"fecha"=>$fechaFormateada,
			"fechaLarga"=>$fechaLargaFormateada,
			"fechaFija"=>$fechaFijaForm,
			"fechaFija2"=>$fechaFija2Form,
			"fechaFija3"=>$fechaFija3Form,
			"fechaMenos"=>$fechaMenosForm,
			"fechaMenos2"=>$fechaMenos2Form,
			"fechaMenos3"=>$fechaMenos3Form
		],
		"Ejercicio 7");
	}

	// ---------- Ejer 5 -----------------
	public function accionEjer5(){
		$vector = array();
		$vector[1] = "esto es una cadena";
		$vector["posi1"] = 25.67;
		$vector[] = false;
		$vector["ultima"] = array(2,5,96);
		$vector[56] = 23;

		$this->dibujaVista("vistaejer5",["vector"=>$vector],"Ejercicio 5");
	}

}

