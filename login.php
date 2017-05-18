<?php

	require_once('inc/header.php');
	require_once('inc/nav.php');
	include('inc/datos.php');

	 if (isset($_POST['enviar']) && !empty($_POST['nick']) && !empty($_POST['pass']) && (buscarUsuario($_POST['nick'],$_POST['pass'],$db) == 1)) {
	 	header('Location: index.php');
	 }
?>
<div id="login">
	<form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" autocomplete="off">
			<fieldset>
				<h2>INTRODUCE TUS CREDENCIALES:</h2>
					<span class="<?php if (isset($_POST['enviar']) && !empty($_POST['nick']) && !empty($_POST['pass']) && (buscarUsuario($_POST['nick'],$_POST['pass'],$db) == -1)) {
							echo 'error';
						} else {echo 'normal';}?>">¡Usuario no existe o la contraseña no coincide!</span>
					
					<input type="text" name="nick" required="required" placeholder="Nick:" value="<?php echo isset($_POST['nick']) ? $_POST['nick'] : '';?>"/></br>				
					<input type="password" name="pass" placeholder="Contraseña:" required="required" /></br>
					<input type="submit" name="enviar" value="Enviar"/>
			</fieldset>
	</div>	</form>

<?php
require_once('inc/aside.php');
	require_once('inc/footer.php');

?>