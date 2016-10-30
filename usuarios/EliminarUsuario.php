<?php $titulo="Eliminar Usuario"; ?>
<?php include('../assets/InicioDocumento.php'); ?>
    <form id="formulario" action="" method="post" >
            <label>Nombre</label>
                    <input id="nombre" name="nombre" type="text" placeholder='Nombre' disabled/>
             <br>
                <label>Constraseña</label>
                    <input id="password" name="password"  placeholder='hola' disabled/>  
            <br>
                <input id="Eliminar" name="Eliminar" type="submit" value="Eliminar" />
    </form>
<?php include('../assets/FinDocumento.php'); ?>