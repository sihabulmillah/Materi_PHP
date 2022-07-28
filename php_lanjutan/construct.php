<?php
class Kendaraan
{
    var $merek;
    var $harga;
    var $jenis;

    function __construct($c_merek, $c_harga, $c_jenis)
    {
        // echo "ini dari method construct ";
        $this->merek = $c_merek;
        $this->harga = $c_harga;
        $this->jenis = $c_jenis;
    }
    // function __toString()
    // {
    //     return "Merek $this->merek , Harga $this->harga , Jenis $this->jenis <br>";
    // }
    function info_kendaraan()
    {

        return "Merek $this->merek , Harga Rp." . number_format($this->harga, 2, ',', '.') . "  , Jenis $this->jenis <br>";
    }
}

$mobil = new Kendaraan('Avanza', 200000000, 'Mini Van');
echo $mobil->info_kendaraan();
$motor = new Kendaraan('Honda', 50000000, 'Sport');
echo $motor->info_kendaraan();
