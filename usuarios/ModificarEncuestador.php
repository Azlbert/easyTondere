<?php $titulo="Modificar Encuestador"; ?>
<?php include('../assets/InicioDocumento.php'); ?>
    <form id="formulario" action="" method="post" >                
            <label>Nombre</label>
                    <input id="nombre" name="nombre" type="text"  placeholder='Nombre'/>
             <br>
                <label>Domicilio</label>
                    <input id="domicilio" name="domicilio" type="text"  placeholder='Domicilio'/>      
             <br>
                <label>Teléfono</label>
                    <input id="telefono" name="telefono" type="text" placeholder='Teléfono' />
            <br>
                <label>Correo electrónico</label>
                    <input id="correo" name="correo" type="text"  placeholder='Correo electrónico'/>
             <br>
                <input id="Modificar" name="Modificar" type="submit" value="Modificar" />
    </form>
<?php include('../assets/FinDocumento.php'); ?>