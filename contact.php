<?php
include 'connection.php';

$name = $_GET['name'];
$mail = $_GET['mail'];
$message = $_GET['msg'];

$query = "INSERT INTO `contact`(`Name`, `Mail`, `Message`) VALUES('$name', '$mail', '$message')";
$result = mysqli_query($conn, $query);

if($result)
{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Thank You !!')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
    header("Location: ./index.html");
}
else
{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Try Again !!')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
    header("Location: ./index.html");
}
?>