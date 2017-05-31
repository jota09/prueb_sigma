<?php

    $server = "localhost";   $user = "root";
    $pass = "";              $db = "prueba";
    $motor = "mysqli";

    include ("../adodb5/adodb-exceptions.inc.php");
    include ("../adodb5/adodb.inc.php");
    
    $DB = NewADOConnection($motor);  // Crea la conexion a la base de datos
//    $DB->debug = true;
    $DB->Connect($server,$user,$pass,$db);