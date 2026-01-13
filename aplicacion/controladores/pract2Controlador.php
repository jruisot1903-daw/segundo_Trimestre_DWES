<?php
	 
class pract2Controlador extends CControlador
{
	public array $menuizq=[];
	public array $barraUbi=[];
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

		$this->menuizq = [
			[
				"texto" => "Inicio", 
				"enlace" => ["inicial"]
			],
			
		];

		

		$this->dibujaVista("index",[],
							"Pagina principal");
	}

	

}

