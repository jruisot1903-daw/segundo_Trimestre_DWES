<?php

class ejemModelosControlador extends CControlador
{
	public array $menuizq = [];
	public array $barraUbi = [];
	public function accionIndex()
	{
		$this->barraUbi = [
			[
				"texto" => "Inicio",
				"enlace" => ["inicial"]
			],
			[
				"texto" => "EjemploModelos",
				"enlace" => ["ejemModelos"]
			]
		];

		$this->menuizq = [
			[
				"texto" =>"Inicio",
				"enlace"=>["inicial"]
			],
			[
				"texto" => "EjemploModelos",
				"enlace" => ["ejemModelos"]
			]
		];


		$art = new articulos();

		$art->nombre = "hp portatil i5";

		//nombre del modelo= nombre del array por post
			$nombre=$art->getNombre();
			if (isset($_POST[$nombre]))
			{
				//asigno un codigo de articulo por defecto
				$art->cod_articulo=5;
				//asigno los valores al articulo a partir de lo recogido del formulario
				$art->setValores($_POST[$nombre]);

				//compruebo si son validos los datos del articulo
				if ($art->validar())
				{ //son validos los datos del articulo

				//almaceno el articulo en la base de datos


				//redirecciono a la página de listado de todos losarticulos
				Sistema::app()->irAPagina(
				array("articulos",
				"verTodos"));
				exit;
				}
				else
				{ //no es valido, vuelvo a mostrar los valores
				$this->dibujaVista("nuevo",
				array("modelo"=>$art),
				"Crear articulo");
				exit;
				}
		    }

		$this->dibujaVista(
			"index",
			array("modelo" => $art),
			"Ejemplo Modelos"
		);
	}

	public function accionNuevo()	
	{
			//creo un nuevo objeto articulo
			$articulo=new Articulos();

			//nombre del modelo= nombre del array por post
			$nombre=$articulo->getNombre();
			if (isset($_POST[$nombre]))
			{
				//asigno un codigo de articulo por defecto
				$articulo->cod_articulo=5;
				//asigno los valores al articulo a partir de lo recogido del formulario
				$articulo->setValores($_POST[$nombre]);

				//compruebo si son validos los datos del articulo
				if ($articulo->validar())
				{ //son validos los datos del articulo

				//almaceno el articulo en la base de datos


				//redirecciono a la página de listado de todos losarticulos
				Sistema::app()->irAPagina(
				array("articulos",
				"verTodos"));
				exit;
				}
				else
				{ //no es valido, vuelvo a mostrar los valores
				$this->dibujaVista("nuevo",
				array("modelo"=>$articulo),
				"Crear articulo");
				exit;
				}
		    }
	}

}