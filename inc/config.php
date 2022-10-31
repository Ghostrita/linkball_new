<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "linkballfr_db";

    $conn = new mysqli($server, $username, $password, $dbname);

    if($conn->connect_error){ // if($conn->connect_error != NULL)
        echo "can't connect".$conn->connect_error;
    }

    /*try {
        $db = new PDO("mysql:host={$server}; dbname={$dbname}", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERROMODE_EXCEPTION);
    } catch(PDOEXCEPTION $e){
        $e->getMessage();
    }*/

    // echo "connaceted successfully";
    // echo "<br>";

?>