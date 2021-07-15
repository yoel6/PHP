<?php 
include('oop.php');
$a = new db();
session_start();
if (!isset($_SESSION["anjing1"]) && !isset($_SESSION["anjing2"]) && !isset($_SESSION["anjing3"])) {
    if(isset($_POST['anjing1'])){
        $a->nama='Sastro Hadi Subroto';
        $a->no=$_POST['anjing1'];
        $_SESSION["anjing1"]='Sastro Hadi Subroto';
        echo $a->tambahkan();
    }
    if(isset($_POST['anjing2'])){
        $a->nama='Tarjo Gunawan';
        $a->no=$_POST['anjing2'];
        $_SESSION["anjing2"]='Tarjo Gunawan';
        echo $a->tambahkan();
    }
    if(isset($_POST['anjing3'])){
        $a->nama='Budi Patrik Iskandar';
        $a->no=$_POST['anjing3'];
        $_SESSION["anjing3"]='Budi Patrik Iskandar';
        var_dump($a->tambahkan());
    }
}else{
    header("Location:home.php");
}
?>