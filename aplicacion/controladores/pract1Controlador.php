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
				"texto"=>"Índice",
				"enlace"=>["pract1","MiIndice"]
			],
			[
				"texto"=>"Ejercicio 1",
				"enlace"=>["pract1","Ejer1"]
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
}

