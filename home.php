<?php
    session_start();
    echo"<a href='hapus.php'>logout</a><br><br>";
    $barang = [['no'=>'1','Nama Matkul'=>'Tekjar'],['no'=>'2','Nama Matkul'=>'Pemrograman'],
    ['no'=>'3','Nama Matkul'=>'Matematika'],['no'=>'4','Nama Matkul'=>'Agama']]; 
    echo"<form action='' method='POST'>";
    echo"<table border='3'>";
        echo"<tr>";
        echo"<td>No</td>";
        echo"<td>Nama Matkul</td>";
        echo"<td>Ket</td>";
        echo"</tr>";
        foreach ($barang as $key) {
            $a = $key['no'];
            echo"<tr>";
            echo"<td>".$key["no"]."</td>";
            echo"<td>".$key["Nama Matkul"]."</td>";
            echo"<td><input type='checkbox' name='$a' value='$a'/></td>";
            echo"</tr>";
        }
    echo"</table>";
    echo"<br><input type='submit' name='submit' value='Ambil'>";
    echo"</form>";
    $_SESSION ["total"] = count($barang) ; 
    if (isset($_POST['submit'])) {    
        for ($i=1; $i <= count($barang) ; $i++) { 
            if (isset($_POST[$i])) {
                $b = $_POST[$i];
                $_SESSION["No$b"]=$barang[$b-1]['no'];
                $_SESSION["Nama Matkul$b"]=$barang[$b-1]['Nama Matkul'];
            }
         }
        header("Location: inputan.php");
    }
?>
    