<?php $titulo="Crear Usuario Coordinador"; ?>
<?php include('../assets/InicioDocumento.php'); ?>
    <div class="row">

        <form id="formulario" action="" method="post" >

            <label>Universidad</label>
                <select >
                    <option value="Vacio">Seleccione una opción</option>
                    <option value="">Universidad Tecnológica de Jalisco</option>
                    <option value="">Universidad Tecnológica Tula - Tepeji</option>
                    <option value="">Universidad Tecnológica de Bahía de Banderas</option>
                </select>
            <br>
            <label>Nombre de coordinador</label>
                <input id="nombre" name="nombre" type="text" disabled/>
            <br>
                <input id="Agregar" name="agregar" type="submit" value="agregar" />
        </form>
    </div>
<?php include('../assets/FinDocumento.php'); ?>
				