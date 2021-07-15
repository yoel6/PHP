<?php 
include("db.php");
$a = new mydb();
$r = $a -> tampilkan_table();
    echo"<table border=3>";
    echo"<tr>";
        echo"<td>no</td>";
        echo"<td>nama</td>";
        echo"<td>nim</td>";
        echo"<td>ket</td>";
    echo"<tr>";
    foreach ($r as $key ) {
    echo"<tr>";
        echo"<td>".$key["nomor"]."</td>";
        echo"<td>".$key["nama"]."</td>";
        echo"<td>".$key["nim"]."</td>";
        $j = $key["nomor"];
        echo"<td><a href='hapus.php?nomor=$j'>hapus</a></td>";
    echo"<tr>";
}
    echo"</table>";
?>

<html>
</html>