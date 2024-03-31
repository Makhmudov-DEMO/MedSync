<?php
// Creating connetciton with my database

    $database= new mysqli("localhost","root","","medsync");
    // if any error then display it on screen
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>