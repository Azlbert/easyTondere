<?php
// Start the session
    session_start();
    $_SESSION["tipoUsario"] = "admin";
    $_SESSION["Usuario"] = "xxxxxxx";
    if(!isset($titulo) || $titulo == "")
        $titulo = "Sistema de encuestas";

    $serverName = "CA02.utj.edu.mx";   
    $uid = "skandia";     
    $pwd = "12345678";    
    $databaseName = "CA02UTJ"; 
    
    $serverName = "mssql4.gear.host";   
    $uid = "santidb";     
    $pwd = "Ce57134Yyr~_";    
    $databaseName = "santidb"; 

    



    $connectionInfo = array( "UID"=>$uid,                              
                             "PWD"=>$pwd,                              
                             "Database"=>$databaseName);   

    /* Connect using SQL Server Authentication. */    
    $conn = sqlsrv_connect( $serverName, $connectionInfo); 
    if( $conn ) {
     echo "Connection established.";
    }else{
     echo "Connection could not be established. :c  sfsdfsd";
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