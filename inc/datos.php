<?php
include ('class_anuncios.php');
include('class_BD.php');
include('class_usuario.php');
include('class_oferta.php');
$fecha = date("Y-m-d H:i:s");
$text1 = "Vendo televisión de plasma nueva sin utilizar,Vendo televisión de plasma nueva sin utilizar,Vendo televisión de plasma nueva sin utilizar,Vendo televisión de plasma nueva sin utilizar,
Vendo televisión de plasma nueva sin utilizar,Vendo televisión de plasma nueva sin utilizar,Vendo televisión de plasma nueva sin utilizar,Vendo televisión de plasma nueva sin utilizar";
$oferta1 = new Oferta(1,$fecha,"Pablo","Compro","Está todavia disponible?",700);
$oferta2 = new Oferta(1,$fecha,"Mario","Compro","Está todavia disponible?",1700);
$oferta3 = new Oferta(1,$fecha,"Pablo","Compro","Está todavia disponible?",1900);
$oferta4 = new Oferta(1,$fecha,"Nemesio","Compro","Está todavia disponible?",900);
$oferta5 = new Oferta(1,$fecha,"Pablo","Compro","Está todavia disponible?",250);
$oferta6 = new Oferta(1,$fecha,"Pablo","Compro","Está todavia disponible?",400);

	$anuncio1 = new Anuncio($fecha,"Vendo TV",$text1,"Usuario1","img/foto1.jpg",array('img/foto1.jpg','img/foto2.jpg'),800,"informatica",array($oferta1,$oferta4));
	$anuncio2 = new Anuncio($fecha,"Vendo Moto","Vendo moto de segunda mano con ITV","Usuario2","img/moto1.jpg",array('img/foto1.jpg','img/foto2.jpg'),2000,"motor",array($oferta2));
	$anuncio3 = new Anuncio($fecha,"Vendo Casa","Vendo casa de pueblo totalmente reformada","Usuario3","img/casa1.jpg",array('img/foto1.jpg','img/foto2.jpg'),2500,"inmobiliaria",array($oferta3));
	$anuncio4 = new Anuncio($fecha,"Vendo TV",$text1,"Usuario4","img/foto1.jpg",array('img/foto2.jpg','img/foto2.jpg'),1000,"informatica",array($oferta4));
	$anuncio5 = new Anuncio($fecha,"Vendo Abrigo","Vendo abrigo de piel nuevo por no usar","Usuario1","img/abrigo.jpg",array('img/foto1.jpg','img/foto2.jpg'),300,"moda",array($oferta5));
	$anuncio6 = new Anuncio($fecha,"Vendo Traje","Vendo traje de boda nuevo por no usar","Usuario2","img/traje.jpg",array('img/foto1.jpg','img/foto2.jpg'),500,"moda",array($oferta6));

	$usuario1 = new Usuario("Mario Garcia","mario@yahoo.es","Mario","0000","632154523","usuario");
	$usuario2 = new Usuario("Pablo Garcia","pablo@yahoo.es","Pablo","0000","632154523","usuario");
	$usuario3 = new Usuario("Nemesio Garcia","nemesio@yahoo.es","Nemesio","0000","632154523","usuario");

	

	$db = new BD(array($anuncio1,$anuncio2,$anuncio3,$anuncio4,$anuncio5,$anuncio6),array($usuario1,$usuario2,$usuario3));
	$db->ofertas=$oferta1;

	 function buscarAnuncio($var,$db) {
		for($i=0;$i<count($db->entradas);$i++) {		
			$anuncio=$db->entradas[$i];
			$id=$anuncio->id;
			if($id==$var) {	
				return $anuncio;
				break;
			}
		}
	}

	function buscarAnuncios($texto,$min,$max,$db) {
		$anuncios=array();
		for($i=0;$i<count($db->entradas);$i++) {		
			$anuncio=$db->entradas[$i];
			$id=$anuncio->id;
			$tit=$anuncio->titulo;
			$text=$anuncio->texto;
			$precio=$anuncio->precio;
			$busca1=stripos($tit,$texto);
			$busca2=stripos($text,$texto);			
			if($precio > $min && $precio < $max && ($busca1!==false || $busca2!==false)) {	
				array_push($anuncios,$anuncio);				
			}
		}
		return $anuncios;
	}

	function filtrarAnuncio($filtro,$db) {
		$anuncios=array();
		for($i=0;$i<count($db->entradas);$i++) {		
			$anuncio=$db->entradas[$i];
			$categ=$anuncio->categoria;
			foreach ($filtro as $key => $opcion) {
				if($opcion == $categ) {
					array_push($anuncios,$anuncio);
				}
			}
		}
		return $anuncios;
	}

	function mostrarAnuncios($anuncios) {
		for($i=0;$i<count($anuncios);$i++) {
				$anuncio=$anuncios[$i];
				echo $anuncio;				
				$id=$anuncio->id;			
		}
	}

	function buscarUsuario($var,$pas,$db) {
		for($i=0;$i<count($db->usuarios);$i++) {		
			$usuario=$db->usuarios[$i];
			$nick=$usuario->nick;
			$pass=$usuario->pass;			
			if(($nick==$var) && ($pass==$pas)) {					
				return 1;
				break;
			} 
		}
		return -1;
	}

	function buscarNick($var,$db) {
		for($i=0;$i<count($db->usuarios);$i++) {		
			$usuario=$db->usuarios[$i];
			$nick=$usuario->nick;			
			if(($nick==$var)) {					
				return 1;
				break;
			} 
		}
		return -1;
	}


?>