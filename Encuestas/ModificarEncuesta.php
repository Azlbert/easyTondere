<?php $titulo="Modificar Encuesta"; ?>
<?php include('../assets/InicioDocumento.php'); ?>
	<form id="formulario" action="" method="post" >
		<label>Nombre</label>
		<input id="nombre" name="nombre" type="text" placeholder='Nombre' value='General'/>
		<br>    
		<label>Descripci&oacute;n</label>
		<input id="descripcion" name="descripcion" type="text" placeholder='Descripci&oacute;n' value='Informaci&oacute;n general' />
		<br>
		<input id="Modificar" name="Modificar" type="submit" value="Modificar" />
	</form>
<?php include('../assets/FinDocumento.php'); ?>