<?php
function openConn(){
    echo "start";
    $serve="localhost";
    $user="root";
    $pass="Ki008res*";
    $db="MyList";
    $conn = new mysqli($serve,$user,$pass,$db) or die("error connecting database ".mysqli_connect_error());
    echo("success");
    return $conn;
}
?> 