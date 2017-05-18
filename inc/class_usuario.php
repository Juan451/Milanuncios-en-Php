<?php 
    class Usuario {
		private static $idUsuario = 0;
		public $id;
		public $nombre;
		private $email;
		public $nick;
		private $pass;
		private $tel;
		private $rol;
		
		public function __construct($arg_nombre="",$arg_email="",$arg_nick="",$arg_pass="",$arg_tel="",$arg_rol="") {
			
			$this->nombre=$arg_nombre;
			$this->email=$arg_email;
			$this->nick=$arg_nick;
			$this->pass=$arg_pass;
			$this->tel=$arg_tel;
			$this->rol=$arg_rol;
			self::$idUsuario++;
			$this->id=self::$idUsuario;
			
		}
      public function __set($a,$v)	{
		  
		  
		  switch ($a) {
			  case 'nombre':
			     $this->nombre=$v;
				 break;
			  case 'email':
			     $this->email=$v;
				 break;
			  case 'nick':
			     $this->nick=$v;
				 break;
			  case 'pass':
			     $this->pass=$v;
				 break;
			  case 'tel':
			     $this->tel=$v;
				 break;
			  case 'rol':
			     $this->rol=$v;
				 break;
		  }
		}	
        public function __get($a) {
			switch ($a) {
			  case 'pass':
				 return $this->pass;
				 break;
			  case 'email':
			     return $this->email;
				 break;
			  case 'tel':
			     return $this->tel;
				 break;
			
			}
		}			
	}