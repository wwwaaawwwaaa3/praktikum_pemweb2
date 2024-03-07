<?php
//function define by user

//fungsi yang tidak mengembalikan nilai
function salam(){
    echo "assalamualikum";
}
salam(); //cetaknya

echo "<br>";

function panggil($arg1){
    echo "halo apa kabar mbak $arg1";
}
panggil("nazwa");

echo "<br>";

//fungsi yang mengembalikan nilai
function hasil($a,$b){
    $c=$a*$b;
    return $c;
}
echo hasil(5,7);

echo "<br>";

//buat fungsi umur
function umur($thn_lahir){
    $thn_sekarang = 2024;
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
echo umur(2005);
?>