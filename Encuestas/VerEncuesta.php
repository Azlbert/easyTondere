<?php $titulo="Ver y Buscar Encuesta"; ?>
<?php include('../assets/InicioDocumento.php'); ?>
	<input id="nombre" name="nombre" type="text" placeholder="Nombre de la Encuesta" class="buscar"/>                    
    <input id="Buscar" name="Buscar" type="submit" value="Buscar" class="buscar" />
                        
	<table>
		<tr>
			<th>Codigo</th>
            <th>Nombre</th>
            <th>Descripci&oacute;n</th>
			<th colspan="2">Acciones</th>
		</tr>
        <tr>
			<td>1</td>
			<td>General</td>
			<td>Informaci&oacute;n general</td>
			<td><a href="ModificarCategoria.php"><img src="images/editar.png" border="0" height=20 /></a></td>
			<td><a href="EliminarCategoria.php"><img src="images/eliminar.png" border="0" height=20 /></a></td>
		</tr>
		<tr>
			<td>2</td>
			<td>Ambiente</td>
			<td>Ambiente laboral de trabajo</td>
			<td><a href="ModificarCategoria.php"><img src="images/editar.png" border="0" height=20 /></a></td>
			<td><a href="EliminarCategoria.php"><img src="images/eliminar.png" border="0" height=20 /></a></td>
		</tr>
	</table> 
<?php include('../assets/FinDocumento.php'); ?>