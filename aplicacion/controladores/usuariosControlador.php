<?php
	 
class usuariosControlador extends CControlador
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
							"Principal Usuarios");
		
	}

	
	public function accionNuevo(){
		echo "<p>Nuevo Usuarios</p>";
	}

	
	public function accionModificar(){
		echo "<p>Modificar Usuario</p>";
	}

	
	public function accionBorrar(){
		echo "<p>Borrar Usuarios</p>";
	}
	

}

