<?php
include_once 'header.php';
include_once 'sidebar.php'
?>
<!-- main.php -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Welcome WEB2-Home</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ini hasil from Belanja</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
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
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Nazwa Gita Naysilla SI09 0110123075
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include_once 'footer.php'
?>




