<?php 
    $buah=["jeruk","apel","jambu"]; 
    $barang=[["Melon","Tomat"],["Jeruk","Mangga"],["Anggur","Semangka"]];
     for ($x=0; $x < count($buah); $x++) { 
             echo $buah[$x]."<br>";
     }
     $a=0;
     while ($a < count($buah)) {
             echo $buah[$a];
             echo "<br>";
             $a++;
     }
     foreach ($buah as $b) {
             echo $b."<br>";
    }
    echo"<br>";
    for ($i=0; $i < count($barang); $i++) { 
            echo $barang[$i][0]."<br>";
    }
    echo"<br>";
    echo"<br>";

    $buku =[ ["judul" => "Pemrograman PHP", "Penulis" => "Adnan", "Harga" => 20000],
    ["judul" => "Pemrograman PHP2", "Penulis" => "Adnan2", "Harga" => 50000]
    ];
    echo $buku[0]["judul"]."<br>";
    echo $buku[1]["Penulis"]."<br>";

    foreach ($buku as $bk) {
        echo $bk["judul"]."-".$bk["Penulis"]."-".$bk["Harga"]."<br>";
    }

?>