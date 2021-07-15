<html>
<head>
</head>
<title></title>
<body>
    <form method="post" action="">
        <input type="number" name="tahun"> 
        <input type="submit" value="cek">
    </form>
</body>
</html>
<?php 
    if(isset($_POST["tahun"])){
        $tahun= $_POST["tahun"];
    if ($tahun%4==0) {
        echo "Tahun "."<font color='red'>".$tahun."</font>"." Kabisat";
    }else{
        echo "Bukan tahun "."<font color='red'>".$tahun."</font>"." kabisat";
    }
}
?>
