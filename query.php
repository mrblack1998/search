<?php
    include "config.php";

    if(isset($conn) && isset($_POST["key"])){
        $ip = "";
        if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        //if user is from the proxy
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        //if user is from the remote address
        else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $content = mysqli_real_escape_string($conn, $_POST["key"]);
        if(mysqli_query($conn, "INSERT INTO search(content, ip) VALUES('$content', '$ip')")){
            echo 1;
        }else{
            echo 0;
        }
    }
?>