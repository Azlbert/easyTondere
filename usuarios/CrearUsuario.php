<?php $titulo="Crear Usuario"; ?>
<?php include('../assets/InicioDocumento.php'); ?>
    <form id="formulario" action="" method="post" >

            <label>Nombre</label>
                    <input id="nombre" name="nombre" type="text" />
             <br>
                <label>Constraseña</label>
                    <input id="password" name="password" type="password" />      
             <br>
                <label>Repita la constraseña</label>
                    <input id="password2" name="password2" type="password" />
            <br>
                <label>Tipo de usuario</label>
            <select >
                <option value="Vacio">Seleccione una opción</option>
                <option value="SuperUsuario">Super Usuario</option>
                <option value="Empresa">Empresa</option>
                <option value="Coordinador">Coordinador</option>
                <option value="Encuestador">Encuestador</option>
            </select>
             <br>
                <input id="siguiente" name="Siguiente" type="submit" value="Siguiente" />
    </form>
<?php include('../assets/FinDocumento.php'); ?>