<?php
function conectar_bd(){
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "apoyo_salud";

    $conn = mysqli_connect($dbServer,$dbUser,$dbPass,$dbName);
    mysqli_set_charset($conn, "utf8");
    return $conn;
}
?>