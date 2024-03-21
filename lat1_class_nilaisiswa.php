<?php
class NilaiSiswa
{
    public $nama;
    public $nilai;
    public $kuliah='STTNF';
    public function gethasil()
    {
        if ($this->nilai>55) return 'lulus';
        else return 'gak lulus';
    }
}

$ns1 = new NilaiSiswa ($nama, $nilai);
$ns1->nama = 'naysilla';
$ns1->nilai = 85;


echo $ns1->nama;
echo $ns1->nilai;
echo $ns1->kuliah;
echo $ns1->gethasil();
?>