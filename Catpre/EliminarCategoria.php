<?php $titulo="Eliminar Categoría"; ?>
<?php include('../assets/InicioDocumento.php'); ?>
	<form id="formulario" action="" method="post" >
		<label>Codigo</label>
		<input id="codigo" name="codigo" type="text" placeholder='1'/>
		<br> 
		<label>Nombre</label>
		<input id="nombre" name="nombre" type="text" placeholder='General'/>
		<br>    
		<label>Descripci&oacute;n</label>
		<input id="descripcion" name="descripcion" type="text" placeholder='Informaci&oacute;n general' />
		<br>
		<input id="Eliminar" name="Eliminar" type="submit" value="Eliminar" />
	</form>
<?php include('../assets/FinDocumento.php'); ?>
