<?php
	class Anuncio {
		private static $idEntrada = 0;
		public $id;
		public $fechaHora;
		public $titulo;
		public $texto;
		public $usuario;
		public $ofertas = array(array());
		public $imagen;
		public $imagenes = array();
		public $precio;
		public $categoria;

		public function __construct($arg_fecha="",$arg_titulo="",$arg_texto="",$arg_usuario="",$arg_imagen="",$arg_imagenes=array(),$arg_precio,$arg_categ,$arg_ofertas=array()) {
			$this->fechaHora=$arg_fecha;
			$this->titulo=$arg_titulo;
			$this->texto=$arg_texto;
			$this->usuario=$arg_usuario;
			$this->ofertas=$arg_ofertas;
			$this->imagen=$arg_imagen;
			$this->imagenes=$arg_imagenes;
			$this->precio=$arg_precio;
			$this->categoria=$arg_categ;
			self::$idEntrada++;
			$this->id = self::$idEntrada;
		}

		public function getId() {
			return self::$idEntrada;
		}

		public function __set($a,$v) {
			switch ($a) {
				case '$this->fechaHora':
					$this->fechaHora=$v;
					break;
				case '$this->titulo':
					$this->titulo=$v;
					break;
				case '$this->texto':
					$this->texto=$v;
					break;
				case '$this->usuario':
					$this->usuario=$v;
					break;
				case '$this->ofertas':
					$this->ofertas=$v;
					break;
				case '$this->imagen':
					$this->imagen=$v;
					break;
				case '$this->imagenes':
					$this->imagenes=$v;
					break;	
				case '$this->precio':
					$this->precio=$v;
					break;	
				case '$this->categoria':
					$this->categoria=$v;
					break;								
			}
		}

		public function mostrarOfertas() {
			$i = 0;
			foreach ($this->ofertas as $key => $ofertas) {
				$i++;
				echo  $ofertas;
			}
		}

		public function mostrarImagenes() {
			foreach ($this->imagenes as $key => $img) {
				echo "<img src='$img'/>";
			}
		}

		public function __toString() {
			return 
			"	<section class='anuncio'>

					<img class='img' src='".$this->imagen."'/>
					<div class='detalles'>
					<div class='info'>
							<span class='categoria'>Categoria: ".$this->categoria."</span><span class='fecha'>Fecha publicación: ".$this->fechaHora."</span>
					</div>
						<h2><a href='anuncio.php?var=".$this->id."'>".$this->titulo."</a><span class='usuario'>- ".$this->usuario."</span></h2>
						<p>".$this->texto."</p>

					</div>
					<div class='ofertas'>
						<p class='centrado'><a href='ofertas.php?var=".$this->id."'>Ofertas: ".count($this->ofertas)."</a></p>
					</div>
					<div class='precio'>
						<p>Precio: ".$this->precio." €</p>
					</div>
					<div class='clean'></div>
				</section>";

		}
	}
	
	
	
	
	
	