<?php $titulo="Mostrar Usuarios"; ?>
<?php include('../assets/InicioDocumento.php'); ?>
    <input id="nombre" name="nombre" type="text" placeholder="Nombre de usuario" class="buscar"/>                    
    <input id="Buscar" name="Buscar" type="submit" value="Buscar" class="buscar" />

    <table>
      <tr>
        <th>Identificador</th>
        <th>Nombre</th>
        <th>Contraseña</th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <td>1</td>
        <td>Maria</td>
        <td>Germany09</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Francisco</td>
        <td>12345</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>3</td>
        <td>Roland</td>
        <td>kj23l</td>
        <td></td>
        <td></td>
      </tr>
    </table>

    <input type="button" value="Anterior">
    <input type="button" value="Siguiente">
<?php include('../assets/FinDocumento.php'); ?>