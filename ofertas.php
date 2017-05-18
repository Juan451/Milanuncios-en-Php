<?php 
    require_once('inc/header.php');
	require_once('inc/nav.php');
	include('inc/datos.php');
	
	$ser=$_GET['var'];
	$anuncio = buscarAnuncio($ser,$db);
	echo $anuncio;
	echo "<h2 class='of'>Ofertas</h2>";
	echo "<table>
	        <tr>
			    <th>Detalles</th>
				<th>Usuario</th>
				<th>Oferta</th>
		 </tr>";
	$anuncio->mostrarOfertas();
	echo "</table>";
?>

<?php 
    require_once ('inc/aside.php');
	require_once ('inc/footer.php');
?>