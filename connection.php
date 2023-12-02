<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "portfolio";

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn) {
    echo "EStablisdhed..!!";
}

?>