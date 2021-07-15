<?php 
    $x=$_POST["bil1"];
    if ($x%2==0) {
        echo"genap";        
    }
    else{
        echo"ganjil";
    }
    echo"<br>";
    for ($i=1; $i <= $x ; $i++) { 
        echo $i." ";
    }
?> 