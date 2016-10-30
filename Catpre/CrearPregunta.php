<?php $titulo="Crear Pregunta"; ?>
<?php include('../assets/InicioDocumento.php'); ?>
	<form id="formulario" name="formulario" action="" method="post" >
		<label>Selecciona categor&iacute;a</label>
		<select name="categoria" id="categoria" >
			<option value="0"> Selecciona </option>
			<option value="1"> General </option>
			<option value="2"> Ambiente </option>
		</select>
		<br>
		<label>Ingresa pregunta</label>
		<input id="pregunta" name="pregunta" type="text"/>
		<br>  
		<label>Selecciona tipo de respuesta</label>
		<select name="respuesta" id="respuesta" onchange="crear_pregunta();">
			<option value="0"> Selecciona </option>
			<option value="1"> Abierta </option>
			<option value="2"> Opci&oacute;n m&uacute;ltiple </option>
			<option value="3"> Verdadero/Falso </option>
		</select>
		<br>
		<div id="opciones"> </div>                        
		<br>
		<input id="Guardar" name="Guardar" type="submit" value="Guardar" />
	</form>
<?php include('../assets/FinDocumento.php'); ?>