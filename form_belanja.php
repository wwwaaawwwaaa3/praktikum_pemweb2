<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $Nama_customer = $_POST['text']; // Perbaikan nama variabel
    $Beli_produk = $_POST['radio']; // Perbaikan nama variabel
    $Jumlah_beli = $_POST['text1']; // Perbaikan nama variabel
}

if ($Beli_produk == 'Televisi') $harga = 4200000;
else if ($Beli_produk == 'Kulkas') $harga = 3100000;
else if ($Beli_produk == 'Mesin cuci') $harga = 3800000; // Perbaikan nilai 'Mesin cuci'

$harga_total = $Jumlah_beli * $harga; // Menggunakan nama variabel yang benar

echo '</br>Nama customer : '. $Nama_customer;
echo '</br>Beli produk : '. $Beli_produk;
echo '</br>Jumlah beli : '. $Jumlah_beli;
echo '</br>Harga : Rp '. $harga;
echo '</br>Harga total : Rp '. $harga_total;
?>