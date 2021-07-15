<?php
    include 'kalkulator.php';
    $k = new kalkulator();
    $k->nilai1=$_POST["nil1"];
    $k->nilai2=$_POST["nil2"];

    echo "hasil Tambah".$k->tambah();
    echo "<br>".$k->cek_bilangan();
?>