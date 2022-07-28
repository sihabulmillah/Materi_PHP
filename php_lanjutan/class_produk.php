<?php
class Produk
{
    // property
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmhHalaman,
        $waktuMain;


    // method contructor ... fungsi yang akan di jalankan pertamakali saat membaut object
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0, $jmhHalaman = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->waktuMain = $waktuMain;
        $this->jmhHalaman = $jmhHalaman;
    }

    // method 
    public function getLabel()
    {
        return "$this->penulis , $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | 
        {$this->getLabel()} (Rp. {$this->harga})";
        //sebelum memakai konsep inheritance
        // if ($this->tipe == "Komik") {
        //     $str .= " - {$this->jmhHalaman} Halaman";
        // } else if ($this->tipe == "Game") {
        //     $str .= " ~ {$this->waktuMain} Jam.";
        // }
        return $str;
    }
}
class CetakInfoProduk
{ //object type 
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

class Komik extends Produk
{
    public function getInfoKomik()
    {
        $str = "Komik : {$this->getInfoProduk()} - {$this->jmhHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfoGame()
    {
        $str = "Game : {$this->judul} | 
        {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 0, 100,);
$produk2 = new Produk("Main Instagra", "Dewa Ekaprayoga", "Billionare Store", 150000, 0, 250,);
$produk3 = new Game("Winning Eleven", "Playstation", "Sony Erection", 30000, 10, 0,);
// echo $produk1->getLabel();
// echo "<br>";
// echo $produk2->getLabel();
// echo "<br>";

// $infoproduk = new CetakInfoProduk();
// echo $infoproduk->cetak($produk1);

echo $produk1->getInfoKomik();
echo "<br>";
echo $produk3->getInfoGame();
