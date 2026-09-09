<?php

class mobil{
    private $merk;
    private $warna;
    private $kecepatan;

    public function getMerk(){
        return $this->merk;
    }
    public function getWarna(){
        return $this->warna;
    }
    public function getKecepatan(){
        return $this->kecepatan;
    }

    public function setMerk($merk){
        $this->merk = $merk ;
    }

    public function setWarna($warna){
        
        if ($warna === ""){
            echo "Nama tidak boleh kosong <br>";
        } elseif (strlen($warna) <= 3 ){
            echo "Warna tidakk valid <br>";
        } else {
            $this->warna = $warna ;
        } 
    }

    public function setKecepatan($kecepatan){

        if ($kecepatan >= 200 || $kecepatan < 0){
            echo "Kecepatan tidak valid <br>"; 
        } else {
            $this->kecepatan = $kecepatan;
        }
    }
}

$m2 = new mobil();
$m2->setKecepatan(166);
$m2->setMerk("Honda");
$m2->setWarna("Kuning");

echo "Merk : ". $m2->getMerk() . "<br>";
echo "Warna : ". $m2->getWarna(). "<br>";
echo "Kecepatan : ". $m2->getKecepatan(). "<br>";