<script>
	function modificar_pregunta(){
		var opcion=document.formulario.respuesta.value;
		var opc;
		if (opcion==2)
		{
			opc = '<label>Opci&oacute;n 1:</label> <input type="text" value=""/>';
			opc+= '<label>Opci&oacute;n 2:</label> <input type="text" value=""/>';
			opc+= '<label>Opci&oacute;n 3:</label> <input type="text" value=""/>';				
		}
		else 
			opc='';
		$('#opciones').html(opc);
	}
</script>
<script>
	function crear_pregunta(){
	var opcion=document.formulario.respuesta.value;
	var opc;
	if (opcion==2)
	{
		opc = '<label>Opci&oacute;n 1:</label> <input type="text"/>';
		opc+= '<label>Opci&oacute;n 2:</label> <input type="text"/>';
		opc+= '<label>Opci&oacute;n 3:</label> <input type="text"/>';				
	}
	else 
		opc='';
	$('#opciones').html(opc);
	}
</script>