<?php 
    require_once('inc/header.php');
	require_once('inc/nav.php');
	include('inc/datos.php');
	
	if(!empty($_POST['texto'])) {
		$texto=$_POST['texto'];
		empty($_POST['min']) ? $min=0 : $min=$_POST['min'];
		empty($_POST['max']) ? $max=1000000 : $max=$_POST['max'];
		
		$anuncios=buscarAnuncios($texto,$min,$max,$db);
		if(count($anuncios) > 0) {
			mostrarAnuncios*($anuncios);
			
		} else {
			echo "No hay resultado";
		}
		
		
	} elseif (!empty($_POST['opcion'])) {
		$filtro=$_POST['opcion'];
		$anuncios=filtrarAnuncio($filtro,$db);
		if(count($anuncios) > 0) {
			mostrarAnuncios($anuncios);
		}
	} else {
		mostrarAnuncios($db->entradas);
	}
	 require_once('inc/aside.php');
     require_once('inc/footer.php');
?>
	