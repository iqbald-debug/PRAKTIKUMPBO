<?php

interface Bentuk {
    public function hitungLuas();
}

class Persegi implements Bentuk {

    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        return $this->sisi * $this->sisi;
    }

    public function getSisi() {
        return $this->sisi;
    }
}

class Lingkaran implements Bentuk {

    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function hitungLuas() {
        return 3.14 * $this->radius * $this->radius;
    }

    public function getRadius() {
        return $this->radius;
    }
}

$bentuk = [
    new Persegi(5),
    new Lingkaran(7)
];

foreach ($bentuk as $item) {

    if ($item instanceof Persegi) {
        echo "Luas Persegi (sisi=" . $item->getSisi() . "): ";
        echo $item->hitungLuas();
        echo "<br>";
    }

    if ($item instanceof Lingkaran) {
        echo "Luas Lingkaran (radius=" . $item->getRadius() . "): ";
        echo $item->hitungLuas();
        echo "<br>";
    }
}

?>