<?php
class NilaiSiswa {
public $nama;
public $nilai;
public $sekolah='SDIT NF';
function __construct($nama, $nilai)
{
$this->nama = $nama;
$this->nilai = $nilai;
}
public function getHasil()
{
if ($this->nilai > 55 ) return 'Lulus';
else return 'Ngak Lulus';
}
}

$ns1 = new NilaiSiswa('Rosa',90);
$ns2 = new NilaiSiswa('Badu',30);
echo $ns1->nama .' : '. $ns1->getHasil();
echo $ns2->nama .' : '. $ns2->getHasil(); 
?>