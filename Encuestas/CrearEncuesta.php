<?php $titulo="Crear Encuesta"; ?>
<?php include('../assets/InicioDocumento.php'); ?>
	<form id="formulario" action="" method="post" >                
		<label>Nombre</label>
		<input id="nombre" name="nombre" type="text" placeholder='Nombre'/>
		<br>    
		<label>Descripci&oacute;n</label>
		<input id="descripcion" name="descripcion" type="text" placeholder='Descripci&oacute;n' />
		<br>
		<input id="Guardar" name="Guardar" type="submit" value="Guardar" />
	</form>
<?php include('../assets/FinDocumento.php'); ?>