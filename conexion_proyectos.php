<?php

    $mysql_host = "localhost";
    $mysql_usuario = "root";
    $mysql_password = "";
    $mysql_port = "3306";

    //BASE DE DATOS
    $mysql_db = "admin_proyectos";

$conn = mysqli_connect($mysql_host, $mysql_usuario, $mysql_password, $mysql_db);

/* COMPROBAR LA CONEXIÓN */
if (mysqli_connect_errno()){
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

//HACEMOS QUE LOS CARACTERES SE VEAN TODOS (UTF8)
mysqli_set_charset($conn,"utf8");

?>