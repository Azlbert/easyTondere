<?php $titulo="Crear Zona"; ?>
<?php include('../assets/InicioDocumento.php'); ?>
    <form id="formulario" action="" method="post" >                  
            <h3>Universidad</h3>

            <label>Nombre</label>
                <input id="nombreUniversidad" name="nombreUniversidad" type="text" />
            <br>
            <label>Domicilio</label>
                <input id="domicilioUniversidad" name="domicilioUniversidad" type="text" />
            <br>
            <label>Teléfono</label>
                <input id=" telefonoUniversidad" name="telefonoUniversidad" type="text" />
            <br>
            <label>Web</label>
                <input id="webUniversidad" name="webUniversidad" type="text" />
            <br>

            <h3>Coordinador</h3>
            <label>Nombre</label>
                    <input id="nombreCoordinador" name="nombreCoordinador" type="text" />
             <br>
                <label>Teléfono</label>
                    <input id="telefonoCoordinador" name="telefonoCoordinador" type="text" />
            <br>
                <label>Correo electrónico</label>
                    <input id="correoCoordinador" name="correoCoordinador" type="text" />
             <br>
                <input id="Agregar" name="agregar" type="submit" value="agregar" />
    </form>
<?php include('../assets/FinDocumento.php'); ?>

                        