<?php
class Penduduk
{
    public $namaP;
    protected $umurP;
    private $alamatP = 'jAKARTA';
}
class Bansos extends Penduduk
{
    public $namaP = 'Andri';
    protected $umurP = 24;
    public $status = 'Miskin';

    public function showPenduduk()
    {
        echo $this->namaP . '<br>';
        echo $this->status . '<br>';
        echo $this->umurP . '<br>';
        echo $this->alamatP . '<br>';
    }
}
$pddk = new Bansos();
echo $pddk->showPenduduk();

// public function setUmur($umur)
// {
//     $this->umurP = $umur;
// }

// public function getUmur()
// {
//     return $this->umurP;
// }

// public function setAlamat($alamat)
// {
//     $this->alamatP = $alamat;
// }

// public function getAlamat()
// {
//     return $this->alamatP;
// }

$pddk = new Penduduk();
$pddk->setUmur(44);
echo $pddk->getUmur() . '<BR>';
$pddk->setAlamat('Jakarta');
echo $pddk->getAlamat() . '<BR>';
// echo $pddk->namaP = "aNDRI";
// echo $pddk->umurP = 55;
// echo $pddk->alamat = "Jakarta";
