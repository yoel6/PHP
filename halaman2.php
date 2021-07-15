<?php 
    $nama="yoel";
    $jk ="pria";
    $nim ="672018296";
    echo "Selamat Datang".$nama."di website ini";
    $pd =substr($nim,0,2);
    $tahun =substr($nim,2,4);
    echo "Anda adalah";
    if($jk=="pria") echo "mahasiswa";
    else echo "mahasiswa";
    echo "angkatan".$tahun."prodi"; 
    if($pd=="67") echo "Teknik Informatika";
    else if($pd=="68") echo "Sistem Informatika";
?>