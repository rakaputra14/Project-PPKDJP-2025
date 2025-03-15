<?php

class Mahasiswa_1
{
    public $nama = 'Toni';
    public $umur;

    public function __construct($nama, $umur)
    {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    public function getNama()
    {
        return $this->nama;
    }
    public function getUmur()
    {
        return $this->umur;
    }
}
$mhs1 = new Mahasiswa_1('Doni ricardo', 33);

echo $mhs1->getNama() . '<br>';
echo $mhs1->getUmur();
