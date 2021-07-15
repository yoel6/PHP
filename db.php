<?php
class mydb{
    public $host="127.0.0.1";
    public $dbname="siasat";
    public $username="root";
    public $password="";
    public $db;
    public $no;
    public $nama;
    public $nim;
    public $datasiswa=[];
    public $delet;

    public function __construct(){
        $this->db= new PDO("mysql:host={$this->host};dbname={$this->dbname}",$this->username, $this->password);
    }
    public function tampilkan_table(){
        $query= $this->db->prepare(" SELECT * FROM siswa ");
        $query-> execute();
        $data= $query->fetchAll();
        $this->datasiswa=$data;
        return $this->datasiswa; 
    }
    public function masukan(){
        $no = $this->no;
        $nama = $this->nama;
        $nim = $this->nim;
        if ($no !=null && $nama !=null && $nim!=null) {
            $query= $this->db->prepare("INSERT INTO siswa (nomor,nama,nim) VALUES ('$no','$nama','$nim')");
            if($query-> execute()){
                header("Location: hasil.php");
            }
        }else {
            header("Location: inputan.php");
        }
    }
    public function hapus(){
        $hasil = $this->delet;
        $query= $this->db->prepare(" DELETE FROM siswa WHERE nomor='$hasil'");
        if($query-> execute()){
            header("Location: hasil.php");
        }else {
            header("Location: hasil.php");
        }
    }
}
?>