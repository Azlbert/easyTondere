<?php $titulo="Crear Usuario Empresa"; ?>
<?php include('../assets/InicioDocumento.php'); ?>

    <form id="formulario" action="" method="post" >

            <label>Razon Social</label>
                    <input id="razonSocial" name="razonSocial" type="text" />
             <br>
                <label>Domicilio</label>
                    <input id="domicilio" name="domicilio" type="text" />      
             <br>
                <label>Teléfono</label>
                    <input id="telefono" name="telefono" type="text" />
            <br>
                <label>Correo electrónico</label>
                    <input id="correo" name="correo" type="text" />
            <br>
                <label>Contacto</label>
                    <input id="contacto" name="contacto" type="text" />
             <br>
                <input id="Agregar" name="agregar" type="submit" value="agregar" />
    </form>
<?php include('../assets/FinDocumento.php'); ?>