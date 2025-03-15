<?php
//class
class Mahasiswa
{
    public $nama = 'Toni';
    private $umurP;

    public function setUmur($umur)
    {
        $this->umurP = $umur;
    }

    public function getUmur()
    {
        return $this->umurP;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }
}

//object
$mhs = new Mahasiswa();
// echo $mhs->nama = 'Doni' . '<br>';
// echo $mhs->umur = 22;
// $mhs->setNama($nama);
$mhs->setUmur(22);

echo $mhs->getUmur();
echo $mhs->getNama();
