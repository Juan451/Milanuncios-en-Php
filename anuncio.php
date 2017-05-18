<?php 

  require_once('inc/header.php');
  require_once('inc/nav.php');
  
  
  $ser=$_GET['var'];
  
  $anuncio = buscarAnuncio($ser,$db);
         echo $anuncio;
		 
		 echo "<div class='fotos'>";
		    $anuncio->mostrarImagenes();
			echo "</div>";
			echo "<div class='botones'>";
			    echo "<a href=' oferta.php?var=$ser'><button>Poner oferta</button></a>";        
				echo "<a href='ofertas.php?var=ser'><button>ver ofertas</button></a>";
			echo "</div>";
	require_once('inc/aside.php');
	require_once('inc/footer.php');
?>