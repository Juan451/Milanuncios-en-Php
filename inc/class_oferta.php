<?php
	class Oferta {
		private static $idOferta=0;
		public $id;
		public $idAnuncio;
		public $fechaHora;
		public $usuario;
		public $titulo;
		public $texto;
		public $importe;

		public function __construct($arg_idAnuncio="",$arg_fecha="",$arg_usuario="",$arg_titulo="",$arg_texto="",$arg_importe="") {
			$this->idAnuncio=$arg_idAnuncio;
			$this->fechaHora=$arg_fecha;
			$this->usuario=$arg_usuario;
			$this->titulo=$arg_titulo;
			$this->texto=$arg_texto;
			$this->importe=$arg_importe;
			self::$idOferta++;
			$this->id=self::$idOferta;
		}

		public function __toString() {
			return 
			"	
			<tr>
				<td>
					<div class='info'>
						<span class='categoria'>Oferta: ".$this->id."</span><span class='fecha'>Fecha publicación: ".$this->fechaHora."</span>
					</div>
					<h2>".$this->titulo."</h2>
					<p>".$this->texto."</p>
				</td>					
				<td>				
					<p class='centrado'>".$this->usuario."</p>
				</td>
				<td>
					<p class='centrado'>".$this->importe." €</p>
				</td>
			</tr>";
		}

		public function __set($a,$v) {
			switch ($a) {
				case 'idAnuncio':
					$this->idAnuncio=$v;
					break;
				case 'fechaHora':
					$this->fechaHora=$v;
					break;
				case 'usuario':
					$this->usuario=$v;
					break;
				case 'titulo':
					$this->titulo=$v;
					break;
				case 'texto':
					$this->texto=$v;
					break;
				case 'importe':
					$this->importe=$v;
					break;							
			}				
		}

		public function getIdOferta() {
			return self::$idOferta;
		}
	}
?>