
   
         <div id="form">
		   
		    <form name="input" id="buscar" action="index.php" method="post" autocomplete="off">
			    <fieldset>
				   
				   <input type="text" name="texto" placeholder="Introduce tu busqueda"/>
				   <label for="min">Precio minimo</label>
				   <input type="numer" name="min" min="0" max="30000" step="100" size="20">
				   <label for="max"> Precio maximo</label>
				   <input type="number" name="max" min="0" max="30000" step="100" size="20">
				   <label for="fecha">Fecha de publicacion</label>
				   <select name="fecha">
				      <option>Ultimo dia</option>
					  <option>Ultima semana</option>
					  <option>ultimo mes</option>
					  <option>todos</option>
				   </select>
				   <input type="submit" value="buscar" name="enviar" />
				  </fieldset>
				</form>
				
			</div>
			<div id="contenedor">
			    <div id="main">