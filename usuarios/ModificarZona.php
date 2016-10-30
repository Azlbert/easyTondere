<?php $titulo="Modificar Zona"; ?>
<?php include('../assets/InicioDocumento.php'); ?>
    <form id="formulario" action="" method="post" >            
            <h3>Universidad</h3>

            <label>Nombre</label>
                <input id="nombreUniversidad" name="nombreUniversidad" type="text"  placeholder='Nombre'/>
            <br>
            <label>Domicilio</label>
                <input id="domicilioUniversidad" name="domicilioUniversidad" type="text"  placeholder='Domicilio'/>
            <br>
            <label>Teléfono</label>
                <input id=" telefonoUniversidad" name="telefonoUniversidad" type="text"  placeholder='Telefono'/>
            <br>
            <label>Página Web</label>
                <input id="webUniversidad" name="webUniversidad" type="text"  placeholder='Páigna web'/>
            <br>

            <h3>Coordinador</h3>
            <label>Nombre</label>
                    <input id="nombreCoordinador" name="nombreCoordinador" type="text"  placeholder='Nombre'/>
             <br>
                <label>Teléfono</label>
                    <input id="telefonoCoordinador" name="telefonoCoordinador" type="text"  placeholder='Telefono'/>
            <br>
                <label>Correo electrónico</label>
                    <input id="correoCoordinador" name="correoCoordinador" type="text"  placeholder='Correo electrónico'/>
             <br>
                <input id="Modificar" name="Modificar" type="submit" value="Modificar" />
    </form>
<?php include('../assets/FinDocumento.php'); ?>