<?php
class Hospital{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "hospital";
    public  $con;

    //koneksi
    public function __construct()
    {
        $this->con = new mysqli ($this->servername,
        $this->username, $this->password, $this->database);
    }
    
    //insert
    public function insertData ($post)
    {
        $nobpjs = $this->con->real_escape_string
        ($_POST['nobpjs']);
        $nik = $this->con->real_escape_string
        ($_POST['nik']);
        $nama = $this->con->real_escape_string
        ($_POST['nama']);
        $jeniskelamin = $this->con->real_escape_string
        ($_POST['jeniskelamin']);
        $ttl = $this->con->real_escape_string
        ($_POST['ttl']);
        $alamat = $this->con->real_escape_string
        ($_POST['alamat']);
    $query = "INSERT INTO rs (nobpjs,nik,nama,jeniskelamin,ttl,alamt) VALUES ('$nobpjs','$nik','$nama','$jeniskelamin,'$ttl','$alamat'')";
    $sql   = $this->con->query($query);
    if ($sql==true)   {
        header ("Location:kartu.php?msgl=insert");
    }else{
        echo "Registrasi Gagal, Coba Lagi !";
        }
    }
  //list data

            public function displayRecordById($id){
                $query  = "SELECT * FROM customers  WHERE id = '$id' ";
                $result = $this->con->query($query);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    return $row;   
                }
                else {
                    echo "Records Not Found";
                }
                
            }
            public function updateRecord($postData)
                {
                    $name = $this->con->real_escape_string
                    ($_POST['name']);
                    $email = $this->con->real_escape_string
                    ($_POST['email']);
                     $username = $this->con->real_escape_string
                    ($_POST['username']);
                    $id = $this->con->real_escape_string
                    ($_POST['id']);
                    if (!empty($id) && !empty($postData)) {
                    $query = "UPDATE customers SET name = '$name',
                    email = '$email', username = '$username' WHERE id ='$id'";
                    $sql = $this->con->query($query);
                    if ($sql==true) {
                        header("Location:index.php?msg2=update");
                        
                    }
                    else {
                        echo "registrasi gagal awokwok";
                    }
                    }
                }
                public function deleteRecord($id){
                    $query = "DELETE FROM customers WHERE id = '$id' ";
                    $sql = $this->con->query($query);
                    if ($sql==true) {
                        header("Location:index.php?msg3=delete");
                    }else {
                        echo "registrasi gagal awokwok tulul";
                    }
                }
        }
        
?>