<!DOCTYPE html>
<html>
<body>

<?php
class Album {
    public $idAlbum
    public $idPemasok
    public $namaAlbum
    public $genreAlbum
    public $harga

    function _construct($idAlbum, $idPemasok, $namaAlbum, $genreAlbum, $harga){
        $this->idAlbum = $idAlbum;
        $this->idPemasok = $idPemasok;
        $this->namaAlbum = $namaAlbum;
        $this->genreAlbum = $genreAlbum;
        $this->harga = $harga;
    }
    
    public function set_idAlbum($idAlbum){
        $this->idAlbum = $idAlbum;
    }

    public function get_idAlbum(){
        return $this->idAlbum;
    }
    
    public function set_idPemasok($idPemasok){
        $this->idPemasok = $idPemasok;
    }

    public function get_idPemasok(){
        return $this->idPemasok;
    }

    public function set_namaAlbum($namaAlbum){
        $this->namaAlbum = $namaAlbum;
    }

    public function get_namaAlbum(){
        return $this->namaAlbum;
    }

    public function set_genreAlbum($genreAlbum){
        $this->genreAlbum = $genreAlbum;
    }

    public function get_genreAlbum(){
        return $this->genreAlbum;
    }

    public function set_harga($harga){
        $this->harga = $harga;
    }

    public function get_harga(){
        return $this->harga;
    }

    public function infoAlbum(){
        echo $this->idAlbum;
        echo $this->idPemasok;
        echo $this->namaAlbum;
        echo $this->genreAlbum;
        echo $this->harga;
    }
}

$album1 = new Album("A1","P1","BTS","Korean",200000);
$album2 = new Album("A2","P2","Justin","Pop",200000);

echo $album1->infoAlbum();
echo $album2->infoAlbum();

?>

</body>
</html>