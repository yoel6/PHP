<?php 
$hasil = $_POST["bil1"];
for ($i=1; $i < $hasil+1; $i++) { 
    for ($z=$hasil; $z > $i ; $z--) { 
        echo "&nbsp";
        }
        for ($a=0; $a < $i; $a++) { 
            echo "*";
    }
    echo "<br>";
}
?>