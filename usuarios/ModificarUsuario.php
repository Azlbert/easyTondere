<?php $titulo="Modificar Usuario"; ?>
<?php include('../assets/InicioDocumento.php'); ?>
	<form id="formulario" action="" method="post" >          
            <label>Nombre</label>
                    <input id="nombre" name="nombre" type="text" placeholder='Nombre' />
             <br>
                <label>Constraseña</label>
                    <input id="password" name="password"  placeholder='hola'/>      
             <br>
                <label>Repita la constraseña</label>
                    <input id="password2" name="password2" type="password"/>
            <br>
                <input id="Modificar" name="Modificar" type="submit" value="Modificar" />
    </form>
<?php include('../assets/FinDocumento.php'); ?>