<?php
$data = [["No"=>"1","NIM"=>"001","Nama"=>"Adnan"],
["No"=>"2","NIM"=>"002","Nama"=>"Cahyo"],["No"=>"3","NIM"=>"003","Nama"=>"Andrew"],
["No"=>"4","NIM"=>"004","Nama"=>"Dimas"],["No"=>"5","NIM"=>"005","Nama"=>"Rachel"]];

echo"<form action='' method='POST'>";
echo"<input type='text' name='nim'>";
echo"<input type='submit' name='1' value='Tampilkan'/>";
echo"</form>";

if(!empty($_POST['nim'])){
        if(preg_match("/^[a-zA-Z ]*$/",$_POST['nim'] )){
                echo"<table border='3'>";
                foreach ($data as $key) {
                    echo"<tr>";
                    echo"<td>No</td>";
                    echo"<td>NIM</td>";
                    echo"<td>NAMA</td>";
                    echo"</tr>";
                    echo"<tr>";
                    echo"<td>".$key["No"]."</td>";
                    echo"<td>".$key["NIM"]."</td>";
                    echo"<td>".$key["Nama"]."</td>";
                    echo"</tr>";
                }
                echo"</table>";
        }else{
             foreach ($data as $h) {
                if ($_POST['nim']==$h['NIM']) {
                    if (isset($_POST['nim'])) {
                        $n = $_POST['nim'];
                    }
                }   
             }
             if (isset($n)) {
                $b = intval(substr($_POST['nim'],2,2));
                echo"<table border='3'>";
                echo"<tr>";
                echo"<td>No</td>";
                echo"<td>NIM</td>";
                echo"<td>NAMA</td>";
                echo"</tr>";
                echo"<tr>";
                echo"<td>".$data[$b-1]["No"]."</td>";
                echo"<td>".$data[$b-1]["NIM"]."</td>";
                echo"<td>".$data[$b-1]["Nama"]."</td>";
                echo"</tr>";
                echo"</table>";
             }else {
                echo"<table border='3'>";
                    foreach ($data as $key) {
                        echo"<tr>";
                        echo"<td>No</td>";
                        echo"<td>NIM</td>";
                        echo"<td>NAMA</td>";
                        echo"</tr>";
                        echo"<tr>";
                        echo"<td>".$key["No"]."</td>";
                        echo"<td>".$key["NIM"]."</td>";
                        echo"<td>".$key["Nama"]."</td>";
                        echo"</tr>";
                    }
                echo"</table>";
             }
           
        }
        
}else{
    echo"<table border='3'>";
    foreach ($data as $key) {
        echo"<tr>";
        echo"<td>No</td>";
        echo"<td>NIM</td>";
        echo"<td>NAMA</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<td>".$key["No"]."</td>";
        echo"<td>".$key["NIM"]."</td>";
        echo"<td>".$key["Nama"]."</td>";
        echo"</tr>";
    }
    echo"</table>";
}
?>