<?php
class Pesawat
{
    public $nama;
    public $jenis;
    protected $grade;
    public $kapasitas;
    public $pramugari = ["Siti", "Endah", "Fitri", "Natasya", "Triana"];

    public function __construct($cnama, $cjenis, $cgrade, $ckapasitas)
    {
        $this->nama = $cnama;
        $this->jenis = $cjenis;
        $this->grade = $cgrade;
        $this->kapasitas = $ckapasitas;
    }
    function info_pesawat()
    {
        return "Nama Pesawat $this->nama Jenis $this->jenis Kelas $this->grade";
    }
    function take_off()
    {
        return "Pastikan sabuk pengaman sudah terpasang";
    }
    function landing()
    {
        return "Pastikan bawaan anda tidak ada yang tertinggal";
    }
    function nama_pramugari()
    {
        // foreach ($this->pramugari as $nama) {
        //     echo "<li>$nama</li>";
        // }

        // $i = 0;
        // while ($i < count($this->pramugari)) {
        //     echo "<li>" . $this->pramugari[$i] . "</li>";
        //     $i++;
        // }

        // do {
        //     echo "<li>" . $this->pramugari[$i] . "</li>";
        //     $i++;
        // } while ($i < count($this->pramugari));

        for ($i = 0; $i < count($this->pramugari); $i++) {
            echo "<li>" . $this->pramugari[$i] . "</li>";
        }
    }
}

$garuda = new Pesawat('Garuda', 'Boeing 77', 'Ekonomi', 50);
echo $garuda->info_pesawat() . "<br>";
echo $garuda->take_off() . "<br>";
echo $garuda->landing() . "<br>";
echo $garuda->nama_pramugari();
