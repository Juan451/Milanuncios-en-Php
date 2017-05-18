<?php 

   class BD {
	   public $entradas = array();
	   public $usuarios = array();
	   public $ofertas = array();
	   
	   public function __construct($arg_entradas=array(),$arg_usuarios=array()) {
		   $this->entradas=$arg_entradas;
		   $this->usuarios=$arg_usuarios;
		   
	   }
	   
	   public function __set($a,$v) {
		   switch ($a) {
			 case 'entradas':
			   $this-> entradas=$v;
			   break;
			 case 'usuarios':
			   $this-> usuarios=$v;
			   break;
			 case 'ofertas':
			   $this->ofertas=$v;
			   break;
		   }
	   }
	   
   }