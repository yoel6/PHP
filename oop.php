<?php
class db{
    public $host="127.0.0.1";
    public $dbname="dbojek";
    public $username="root";
    public $password="";
    public $db;
    public $datasiswa=[];
    public $nama;
    public $no;

    public function __construct(){
        $this->db= new PDO("mysql:host={$this->host};dbname={$this->dbname}",$this->username, $this->password);
    }
    public function tampil(){
        $query= $this->db->prepare(" SELECT nama,jmlbintang FROM tbojek");
        $query-> execute();
        $data= $query->fetchAll();
        $this->datasiswa=$data;
        return $this->datasiswa; 
        
    }
    public function tambah(){
        $query= $this->db->prepare(" SELECT jmlbintang FROM tbojek where nama='$this->nama' ");
        $query-> execute();
        $data= $query->fetchAll();
        $this->datasiswa=$data;
        return $this->datasiswa; 
        
    }
    public function tambahkan(){
        $a =  $this->tambah();
        foreach ($a as $key ) {
              $h = $key['jmlbintang'];
        }
        $v = $this->no;
        $b = $h+$v;
        $query= $this->db->prepare(" UPDATE tbojek SET jmlbintang ='$b' WHERE nama ='$this->nama' ");
        if($query-> execute()){
             header("Location:home.php");        
        }
    }
    public function rekapitulasi(){
        $query= $this->db->prepare("SELECT SUM(jmlbintang) AS total FROM tbojek ");
        $query-> execute();
        $data= $query->fetchAll();
        $this->datasiswa=$data;
        return $this->datasiswa; 
        
    }
}
?>