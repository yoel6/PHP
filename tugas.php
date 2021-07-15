<html>
<head>
</head>
<html>
</html>
<body>
<form action="" method="POST">
    <table border="4">
    <h1>TUGAS</h1>
        <tr>
            <td>No</td>
            <td>NAMA BARANG</td>
            <td>HARGA</td>
            <td>BELI</td>
        </tr>
        <tr>
            <td>1</td>
            <td>KEYBOARD</td>
            <td>Rp.1.000.000</td>
            <td><input type='checkbox' name='1' value='1'/></td>
        </tr>
        <tr>
            <td>2</td>
            <td>MOUSE</td>
            <td>Rp.100.000</td>
            <td><input type='checkbox' name='2' value='2' /></td>
        </tr>
        <tr>
            <td>3</td>
            <td>PRINTER</td>
            <td>Rp.2.100.000</td>
            <td><input type='checkbox' name='3' value='3' /></td>
        </tr>
        <tr>
            <td>4</td>
            <td>SPIKER</td>
            <td>Rp.50.000</td>
            <td><input type='checkbox' name='4' value='4' /></td>
        </tr>
    </table>
    <br>
    <input type="submit" name="submit" value="Beli">
    </form>
</body>
</html>
<?php
$a = 0 ;
if(isset($_POST["submit"])){
    echo"<table border='2'>";
    echo"<tr>";
    echo"<td colspan='2'>Kranjang Belanja</td>";
    echo"</tr>";
    if(isset($_POST["1"])){
        echo"<tr>";
        echo"<td>KEYBOARD</td>";
        echo"<td>Rp.1.000.000</td>";
        $_GET["1"] = 1000000;
        echo"</tr>";
    }
    if(isset($_POST["2"])){
        echo"<tr>";
        echo"<td>MOUSE</td>";
        echo"<td>Rp.100.000</td>";
        $_GET["2"] = 100000;
        echo"</tr>";
    }
    if(isset($_POST["3"])){
        echo"<tr>";
        echo"<td>PRINTER</td>";
        echo"<td>Rp.2.100.000</td>";
        $_GET["3"] = 2100000;
        echo"</tr>";
    }
    if(isset($_POST["4"])){
        echo"<tr>";
        echo"<td>SPIKER</td>";
        echo"<td>Rp.50.000</td>";
        $_GET["4"] = 50000;
        echo"</tr>";
    }
    for ($i=1; $i <= 4 ; $i++) {
        if (isset($_POST["$i"])) {
            $num = $_GET["$i"];
            if (isset($num)) {
                $a += (int)"$num";
            }
        }
    }
    echo"<tr>";
    echo"<td>TOTAL</td>";
    echo"<td>Rp.".number_format($a, 0, '.','.')."</td>";
    echo"</tr>";
    echo"</table>";
}
?>