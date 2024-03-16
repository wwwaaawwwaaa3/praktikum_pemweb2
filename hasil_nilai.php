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
                <h3 class="card-title">ini hasil nilai</h3>

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
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

//Buat Total Nilai (uts+uas+tugas/3)
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

//Buat Perhitungan IF Untuk Mencari Grade
if ($total_nilai >=85){
    $grade = "A";
}
elseif ($total_nilai >=70){
    $grade = "B";
}
elseif ($total_nilai >=56){
    $grade = "C";
}
elseif ($total_nilai >=30){
    $grade = "D";
}
else {
    $grade = "E";
}

//Buat Perhitungan SWITCHCASE Untuk Mencari Predikat
Switch ($grade){
    case "A":
        $predikat = "Sangat Memuaskan";
        break;
    case "B":
        $predikat = "Memuaskan";
        break;  
    case "C":
        $predikat = "Cukup";
        break;  
    default:    
        $predikat = "Tidak Ada";
        break;
}
//buat perhitungan IF untuk mencari status LULUS/TIDAK LULUS
if ($total_nilai >=70){
    $status = "LULUS";
}
else{
    $status = "GAGAL";
}

//Cetak Hasil
echo 'Nama :' . $nama . '<br>';
echo 'Matkul :' . $matkul . '<br>';
echo 'Nilai UTS :' . $nilai_uts . '<br>';
echo 'Nilai UAS :' . $nilai_uas . '<br>';
echo 'Nilai Tugas :' .  $nilai_tugas . '<br>';
echo 'Total Nilai :' . $total_nilai .'<br>';
echo 'Grade :' . $grade .'<br>';
echo 'Predikat:' . $predikat .'<br>';
echo 'Status Kelulusan:' . $status .'<br>';

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

