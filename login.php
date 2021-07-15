<?php
$login = $_POST['user'];
$pass = $_POST['pass'];

$dbu ="fti uksw";
$dbp ="1234";

if ($login==$dbu && $pass==$dbp ){
    session_start();
    $_SESSION["sun"]=$login;
    $_SESSION["spw"]=$pass;
    header("Location: rmk.php");
}else{
    header("Location: index.php");
}

?>