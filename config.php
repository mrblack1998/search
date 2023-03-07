<?php
    $nome_db = "customersw_search";
    $psw_db = "rD=tiAtjdq6)";
    $username_db = "customersw_admin";
    $host_db = "67.227.136.19";
    $conn = mysqli_connect($host_db ,$username_db, $psw_db, $nome_db);
    mysqli_set_charset($conn, "utf8");
    if ($conn -> connect_errno) {
        unset($conn);
    }
?>