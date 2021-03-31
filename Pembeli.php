<!DOCTYPE html>
<html>
<body>

<?php
class Pembeli{
    public $idPembeli
    public $namaPembeli
    public $email
    public $noTlp
    public $username
    public $password

    function _construct($idPembeli, $namaPembeli, $email, $noTlp, $username, $password){
        $this->idPembeli = $idPembeli;
        $this->namaPembeli = $namaPembeli;
        $this->email = $email;
        $this->noTlp = $noTlp;
        $this->username = $username;
        $this->password = $password;
    }
    public function set_idPembeli($idPembeli){
        $this->idPembeli = $idPembeli;
    }

    public function get_idPembeli(){
        return $this->idPembeli;
    }

    public function set_namaPembeli($namaPembeli){
        $this->namaPembeli = $namaPembeli;
    }

    public function get_namaPembeli(){
        return $this->namaPembeli;
    }

    public function set_email($idPembeli){
        $this->idPembeli = $idPembeli;
    }
 
    public function get_email(){
        return $this->idPembeli;
    }

    public function set_noTlp($noTlp){
        $this->noTlp = $noTlp;
    }

    public function get_noTlp(){
        return $this->noTlp;
    }

    public function set_username($username){
        $this->username = $username;
    }

    public function get_username(){
        return $this->username;
    }

    public function set_password($password){
        $this->password = $password;
    }

    public function get_password(){
        return $this->password;
    }

    public function infoPembeli(){
        echo $this->idPembeli;
        echo $this->namaPembeli;
        echo $this->email;
        echo $this->noTlp;
        echo $this->username;
        echo $this->password;
    }    
}

$pembeli1 = new Pembeli("P1", "yaya", "yaya@gmail.com", "081211111111", "yayay", "12yaya34");
$pembeli2 = new Pembeli("P2", "yeye", "yeye@gmail.com", "081222222222", "yeyey", "12yy34");

echo $pembeli1->infoPembeli();
echo $pembeli2->infoPembeli();
?>
</body>
</html>