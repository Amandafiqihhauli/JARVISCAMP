<?php
class Pekerjaan{
    public $namaProfesi;
    public $gaji;

    public function __construct($namaProfesi, $gaji)
    {
        $this->namaProfesi = $namaProfesi;
        $this->gaji = $gaji;
    }

    public function profesi(){echo "Saya adalah $this->namaProfesi";}
    public function jumlahGaji(){echo "Bekerja dengan gaji: $this->gaji";}
    

}

class IT extends Pekerjaan{
    public $tahun_mulai_karir;

    public function __construct($namaProfesi, $gaji ,$tahun_mulai_karir) {
        parent::__construct($namaProfesi, $gaji);
        $this->tahun_mulai_karir = $tahun_mulai_karir;
    }

    public function profesi(){echo "Saya adalah $this->namaProfesi<br>";}
    public function jumlahGaji(){echo "Bekerja dengan gaji: $this->gaji <br>";}
    public function tahun(){echo "mulai karir pada tahun: $this->tahun_mulai_karir";}

}

$IT1 = new IT("Programmer", "10jt", 2023);

$IT1->profesi();
$IT1->jumlahGaji();
$IT1->tahun();



?>