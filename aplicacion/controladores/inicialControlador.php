<?php
	 
class inicialControlador extends CControlador
{
	public array $menuizq=[];
	public array $barraUbi=[];
	public function accionIndex()
	{
		$this->barraUbi = [
			[
				"texto" => "Inicio", 
				"enlace" => ["inicial"]
			]
		];

		$this->menuizq = [
			[
				"texto" => "Inicio", 
				"enlace" => ["inicial"]
			],
			[
				"texto" => "EjemploModelos",
				"enlace" => ["ejemModelos","index"]
			]
		];

		

		$this->dibujaVista("index",[],
							"Pagina principal");
	}

	
	public function accionNuevo(){
		echo "<p>Nueva Pagina </p>";
	}

	

}

