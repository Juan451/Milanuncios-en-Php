<?php
     require_once('inc/header.php');
	 require_once('inc/nav.php');
	 include('inc/datos.php');

	 $fecha = date ("Y-m-d H:i:s");
	 
	 if(isset($_POST['enviar']) && (buscarNick(&_POST['usuario'],$db) == 1)) {
		 $ser=$_POST['var'];
		 $anuncio = buscarAnuncio($ser,$db);
		 $idAnuncio=$anuncio->id;
	     $oferta = new Oferta($idAnuncio,$fecha,$_POST['usuario'],$_POST['titulo'],$_POST['texto'],$_POST['puja']);
	     $ofertas = $anuncio->ofertas;
		 array_push($ofertas, $ofertas);
		 $anuncio->ofertas=$ofertas;
      
	  } elseif (isset($_POST['enviar']) && (buscarNick($_POST['usuario'],$db) == -1)) {
		  $ser=$_POST['var'];
	  } else {
		  $ser=$_GET['var'];
		  
	  }
	  $anuncio = buscarAnuncio($ser,$db);
	  echo $anuncio;
	  if(isset($oferta)) {
		  echo "<h2 class='of'>Tu oferta se ha registrado correctamente!</h2>";
		  echo "<table>";
		  echo $oferta;
		  echo "</oferta>";
	  
	  }

?>
     <div id="ofertar">
	   
	   
	   <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" autocomplete="off">
         <fieldset>
             <h2>Introduce tu oferta</h2>
                <p>(Se va a poner una oferta a <?php echo "<a href='anuncio.php?var=$ser'>$anuncio->titulo</a>";?>. Recuerda que las ofertas pueden ser eliminadas por el autor del anuncio.)</p>
				<span class="<?php if (isset($_POST['enviar']) && !empty($_POST['usuario']) && (buscarNick($_POST['usuario'],$db) == -1)) {
					echo 'error';
				} else {echo 'normal';}?>">!tienes que estar registrado para hacer una oferta!</span><br>
			<input type="text" name="usuario" placeholder="tu nick de usuario" required="required" />
			
			<input type="text" name="titulo" placeholder="titulo oferta" required />
			
			
			<input type="number" name="puja" min="50" max="100000" step="100" placeholder="Tu oferta" required /></br>
			<input type="hidden" name="var" value="<?php echo $ser;?>"/>
			<textarea name="texto" placeholder="Deja aqui tu comentario:" required /></textarea></br>
		</fieldset>
	</form>
</div>

<?php

  require_once('inc/aside.php');
  require_once('inc/footer.php');
  
?>
				
		  
	  