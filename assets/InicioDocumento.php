<?php
// Start the session
    session_start();
    $_SESSION["tipoUsario"] = "admin";
    $_SESSION["Usuario"] = "xxxxxxx";
    if(!isset($titulo) || $titulo == "")
        $titulo = "Sistema de encuestas";

    $serverName = "mssql4.gear.host";   
    $uid = "santiago";     
    $pwd = "contrasena12!";    
    $databaseName = "albertodb"; 



    $connectionInfo = array( "UID"=>$uid,                              
                             "PWD"=>$pwd,                              
                             "Database"=>$databaseName);   

    /* Connect using SQL Server Authentication. */    
    $conn = sqlsrv_connect( $serverName, $connectionInfo); 
    if( $conn ) {
     echo "Connection established.";
    }else{
     echo "Connection could not be established. :c  ";
    }
?>

<!DOCTYPE html>
<html>

<?php include('head.php'); ?>
<body>
    <div id="wrapper">
        <div class="page-container">
            <?php include('header.php'); ?>
        </div>

        <div id="content">
            <div class="container container-content">
                <?php include('nav.php'); ?>

                <!-- end content -->
                <div class="col-md-9 col-xs-12" class="centro">
                    <div class="titulo">
                        <legend ><?php echo $titulo; ?></legend>
                    </div>
                    <div class="row">