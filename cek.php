<?php
$a = $_POST["user"];
$b = $_POST["pass"];

$u = "yoel";
$p = "12345";
if ($a == $u && $b == $p) {
    session_start();
    $_SESSION['user'] = $a;
    $_SESSION['pass'] = $b;
    header("Location: home.php");
}else {
    header("Location: Tugas3.php");
}
?>