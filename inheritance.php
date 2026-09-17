<?php

class Produk {

    protected $merek;
    protected $harga;

    public function __construct($merek, $harga) {

        if ($harga <= 0) {
            echo "Harga tidak valid";
            return;
        }

        $this->merek = $merek;
        $this->harga = $harga;
    }

    public function getInfo() {
        echo "Merek : " . $this->merek;
        echo "Harga : Rp " . $this->harga;
    }
}


class Makanan extends Produk {

    protected $nama;
    protected $tanggalKadaluarsa;

    public function __construct($nama, $merek, $harga, $tanggalKadaluarsa) {

        parent::__construct($merek, $harga);

        $this->nama = $nama;
        $this->tanggalKadaluarsa = $tanggalKadaluarsa;
    }

    public function getInfo() {

        echo "Produk : Makanan - " . $this->nama . "<br>";
        echo "Merek : " . $this->merek . "<br>";
        echo "Harga : Rp " . $this->harga . "<br>";
        echo "Tanggal Kadaluarsa : " . $this->tanggalKadaluarsa . "<br>";
        echo "Status : Segar";
    }
}


class Elektronik extends Produk {

    protected $nama;
    protected $garansi;

    public function __construct($nama, $merek, $harga, $garansi) {

        parent::__construct($merek, $harga);

        $this->nama = $nama;
        $this->garansi = $garansi;
    }

    public function getInfo() {

        echo "Produk : Elektronik - " . $this->nama . "<br>";
        echo "Merek : " . $this->merek . "<br>";
        echo "Harga : Rp " . $this->harga . "<br>";
        echo "Garansi : " . $this->garansi . " bulan";
    }
}


$makanan = new Makanan("Mie Instan", "Indomie", 3500, "2025-06-30");
$makanan->getInfo();

echo "<br><br>";

$elektronik = new Elektronik("Smart TV", "Samsung", 5000000, 12);
$elektronik->getInfo();

?>