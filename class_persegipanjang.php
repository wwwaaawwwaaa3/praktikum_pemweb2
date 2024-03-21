

<?php
// Include file yang berisi definisi class PersegiPanjang
require_once 'PersegiPanjang.php';

if (isset($_POST['submit'])) {
    // Tangkap data dari form
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];

    // Buat objek PersegiPanjang
    $persegiPanjang = new PersegiPanjang($panjang, $lebar);

    // Hitung luas dan keliling
    $luas = $persegiPanjang->hitungLuas();
    $keliling = $persegiPanjang->hitungKeliling();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas dan Keliling Persegi Panjang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Hitung Luas dan Keliling Persegi Panjang</h1>
        <form method="POST">
            <div class="form-group row">
                <label for="panjang" class="col-sm-2 col-form-label">Panjang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="panjang" name="panjang" placeholder="Masukkan panjang">
                </div>
            </div>
            <div class="form-group row">
                <label for="lebar" class="col-sm-2 col-form-label">Lebar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lebar" name="lebar" placeholder="Masukkan lebar">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" name="submit" class="btn btn-primary">Hitung</button>
                </div>
            </div>
        </form>

        <?php if (isset($luas) && isset($keliling)): ?>
        <div class="mt-4">
            <h3>Hasil Perhitungan</h3>
            <p>Luas Persegi Panjang: <?php echo $luas; ?></p>
            <p>Keliling Persegi Panjang: <?php echo $keliling; ?></p>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>
