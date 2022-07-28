<?php

class Kendaraan
{
    public $merek;
    protected $harga;
    private $jenis;

    function __construct($c_merek, $c_harga, $c_jenis)
    {
        $this->merek = $c_merek;
        $this->harga = $c_harga;
        $this->jenis = $c_jenis;
    }

    public function info_kendaraan()
    {
        return "Merek $this->merek , Harga Rp." . number_format($this->harga, 2, ',', '.') . "  , Jenis $this->jenis <br>";
    }
}
class Kereta extends Kendaraan
{
    public function info_kereta()
    {
        return "Merk Kereta : $this->merek, Jenis $this->jenis";
    }
}

$motor = new Kendaraan('Supra-fit', 13000000, 'Motor Bebek');
echo $motor->info_kendaraan();

$Lion = new Kereta('Sepur', 10000000000, 'Kereta Cepat');
echo $Lion->info_kereta();
