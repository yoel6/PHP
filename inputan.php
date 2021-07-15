<?php
session_start();
$urut = 1;
$a = $_SESSION['total'];
echo"<a href='hapus.php'>logout</a><br><br>";
echo"<table border='3'>";
        echo"<tr>";
        echo"<td>No</td>";
        echo"<td>Nama Matkul</td>";
        echo"</tr>";
        for ($i=1; $i <= $a; $i++) { 
            if (isset($_SESSION["No$i"])) {
                echo"<tr>";
                echo"<td>".$urut++."</td>";
                echo"<td>".$_SESSION["Nama Matkul$i"]."</td>";
                echo"</tr>";   
            }
        }
echo"</table>";
echo"<a href='home.php'><< kembali</a><br><br>";

?>