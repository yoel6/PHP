<?php 
include("db.php");
$g = new mydb();
$g->no=$_POST["no"]; 
$g->nama=$_POST["nama"];
$g->nim=$_POST["nim"];
$g->masukan();
?>