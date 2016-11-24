<?php $titulo="Crear Usuario Empresa"; ?>
<?php include('../assets/InicioDocumento.php'); ?>


Tabla: <br>
<?php
    $sql = "SELECT idEmpresa,rfc FROM Empresa";
    $stmt = sqlsrv_query( $conn, $sql );

    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        echo $row['idEmpresa'].", ".$row['rfc']."<br />";
    }
    sqlsrv_free_stmt( $stmt);
    
    $valido = true;
?>
    <form id="formulario" action="CrearUsuarioEmpresa.php" method="POST" >
        <label>RFC</label>
        <input id="rfc" name="rfc" value="<?php echo isset($_POST['rfc'])?$_POST['rfc']:"";?>" type="text" />
        <br>
        <label>Razon Social</label>
        <input id="razonSocial" name="razonSocial" value="<?php echo isset($_POST['razonSocial'])?$_POST['razonSocial']:"";?>" type="text" />
        <br>
        <label>Teléfono</label>
        <input id="telefono" name="telefono" value="<?php echo isset($_POST['telefono'])?$_POST['telefono']:"";?>" type="text" />
        <br>
        
        <?php
        if(isset($_POST['telefono']) && intval($_POST['telefono']))
            $_POST['telefono'] = intval($_POST['telefono']);
        else if(isset($_POST['telefono']))
        {
            $valido = false;
            echo "El telefono debe ser numerico<br>";
        }
        ?>
        
        <label>Calle</label>
        <input id="calle" name="calle" value="<?php echo isset($_POST['calle'])?$_POST['calle']:"";?>" type="text" />      
        <br>
        <label>Numero Interior</label>
        <input id="numeroInterior" name="numeroInterior" value="<?php echo isset($_POST['numeroInterior'])?$_POST['numeroInterior']:"";?>" type="text" />      
        <br>
        
        <?php
        if(isset($_POST['numeroInterior']) && intval($_POST['numeroInterior']))
            $_POST['numeroInterior'] = intval($_POST['numeroInterior']);
        else if(isset($_POST['numeroInterior']))
        {
            $valido = false;
            echo "El numero interior debe ser numerico<br>";
        }
        ?>
        
        <label>Numero Exterior</label>
        <input id="numeroExterior" name="numeroExterior" value="<?php echo isset($_POST['numeroExterior'])?$_POST['numeroExterior']:"";?>" type="text" />      
        <br>
        
        <?php
        if(isset($_POST['numeroExterior']) && intval($_POST['numeroExterior']))
            $_POST['numeroExterior'] = intval($_POST['numeroExterior']);
        else if(isset($_POST['numeroExterior']))
        {
            $valido = false;
            echo "El numero exterior debe ser numerico<br>";
        }
        ?>
        
        <label>Colonia</label>
        <input id="colonia" name="colonia" value="<?php echo isset($_POST['colonia'])?$_POST['colonia']:"";?>" type="text" />      
        <br>
        <label>Municipio</label>
        <input id="municipio" name="municipio" value="<?php echo isset($_POST['municipio'])?$_POST['municipio']:"";?>" type="text" />      
        <br>
        <label>Correo electrónico</label>
        <input id="correo" name="correo" value="<?php echo isset($_POST['correo'])?$_POST['correo']:"";?>" type="text" />
        <br>
        <label>Codigo Postal</label>
        <input id="codigoPostal" name="codigoPostal" value="<?php echo isset($_POST['codigoPostal'])?$_POST['codigoPostal']:"";?>" type="text" />
        <br>
        
        <?php
        if(isset($_POST['codigoPostal']) && intval($_POST['codigoPostal']))
            $_POST['codigoPostal'] = intval($_POST['codigoPostal']);
        else if(isset($_POST['codigoPostal']))
        {
            $valido = false;
            echo "El codigo postal debe ser numerico<br>";
        }
        ?>
        
        
        <input id="Agregar" name="agregar" type="submit" value="Agregar" />
    </form>

<?php
    if ($valido && isset($_POST['rfc'])) 
    {
        //---------CONSEGUIR EL ULTIMO ID DE EMPRESA------------
        $sql = "SELECT MAX(idEmpresa) AS ULTIMOID FROM Empresa";
        $stmt = sqlsrv_query( $conn, $sql );

        if( $stmt === false) {
            die( print_r( sqlsrv_errors(), true) );
        }

        $ultimo_ID = 0;

        $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);
        if($row['ULTIMOID'])
            $ultimo_ID = $row['ULTIMOID'];

        sqlsrv_free_stmt( $stmt);
        

        $sql = "INSERT INTO Empresa (idEmpresa,rfc,razonSocial,telefono,calle,numInterior,numExterior,colonia,municipio,email,coidgoPostal) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $params = array($ultimo_ID+1, $_POST['rfc'], $_POST['razonSocial'], $_POST['telefono'], 
                        $_POST['calle'], $_POST['numeroInterior'], $_POST['numeroExterior'], $_POST['colonia'],
                        $_POST['municipio'], $_POST['correo'], $_POST['codigoPostal']);

        $stmt = sqlsrv_query( $conn, $sql, $params);
        if( $stmt === false ) {
             die( print_r( sqlsrv_errors(), true));
        }
        sqlsrv_free_stmt( $stmt);
        echo "El registro se agrego satisfactoriamente<br>";
    }
    else
        echo '';
?>

<?php include('../assets/FinDocumento.php'); ?>