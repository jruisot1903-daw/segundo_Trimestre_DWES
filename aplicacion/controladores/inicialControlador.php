<?php
	 
class inicialControlador extends CControlador
{
	public array $menuizq=[];
	public function accionIndex()
	{
		

		$this->menuizq = [
			[
				"texto" => "Inicio", 
				"enlace" => ["inicial"]
			]
		];

		

		$this->dibujaVista("index",[],
							"Pagina principal");
	}

	
	public function accionNuevo(){
		echo "<p>Nueva Pagina </p>";
	}

	

}

