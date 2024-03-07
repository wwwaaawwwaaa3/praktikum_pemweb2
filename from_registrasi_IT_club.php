    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <div class="container">
        <form method="POST" action="#">
            <h1>Form Registrasi IT Club</h1>
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                    <input id="nim" name="nim" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                    <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" id="jenis_kelamin_laki" type="radio" class="custom-control-input" value="Laki-Laki"> 
                        <label for="jenis_kelamin_laki" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" id="jenis_kelamin_perempuan" type="radio" class="custom-control-input" value="Perempuan"> 
                        <label for="jenis_kelamin_perempuan" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="program_studi" class="col-4 col-form-label">Program Studi</label> 
                <div class="col-8">
                    <select id="program_studi" name="program_studi" class="custom-select">
                        <option value="sistem_informasi">Sistem Informasi</option>
                        <option value="teknik_informatika">Teknik Informatika</option>
                        <option value="bisnis_digital">Bisnis Digital</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Web & Programming</label> 
                <div class="col-8">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill_web_programming[]" id="skill_web_programming_html" type="checkbox" class="custom-control-input" value="HTML"> 
                        <label for="skill_web_programming_html" class="custom-control-label">HTML</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill_web_programming[]" id="skill_web_programming_css" type="checkbox" class="custom-control-input" value="CSS"> 
                        <label for="skill_web_programming_css" class="custom-control-label">CSS</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill_web_programming[]" id="skill_web_programming_js" type="checkbox" class="custom-control-input" value="JavaScript"> 
                        <label for="skill_web_programming_js" class="custom-control-label">JavaScript</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill_web_programming[]" id="skill_web_programming_python" type="checkbox" class="custom-control-input" value="Python"> 
                        <label for="skill_web_programming_python" class="custom-control-label">Python</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill_web_programming[]" id="skill_web_programming_java" type="checkbox" class="custom-control-input" value="Java"> 
                        <label for="skill_web_programming_java" class="custom-control-label">Java</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tempat_domisili" class="col-4 col-form-label">Tempat Domisili</label> 
                <div class="col-8">
                    <select id="tempat_domisili" name="tempat_domisili" class="custom-select">
                        <option value="jakarta">Jakarta</option>
                        <option value="bogor">Bogor</option>
                        <option value="depok">Depok</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                    <input id="email" name="email" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <label for="ipk" class="col-4 col-form-label">IPK</label> 
                <div class="col-8">
                    <input id="ipk" name="ipk" type="text" class="form-control">
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
        </form>
    </div>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $program_studi = $_POST['program_studi'];
    $skill_web_programming = implode(", ", $_POST['skill_web_programming']);
    $tempat_domisili = $_POST['tempat_domisili'];
    $email = $_POST['email'];
    $ipk = $_POST['ipk'];
    
    function status($nilai) {
        if ($nilai >= 0 && $nilai <= 40) {
            return "Kurang";
        } elseif ($nilai > 40 && $nilai <= 100) {
            return "Sangat Baik";
        } else {
            return "Nilai tidak valid";
        }
    }

    $status = status($ipk);

    //cetak
    echo "<h2>Informasi yang anda kirim:</h2>";
    echo "NIM: $nim <br>";
    echo "Nama Lengkap: $nama <br>";
    echo "Jenis Kelamin: $jenis_kelamin <br>";
    echo "Program Studi: $program_studi <br>";
    echo "Skill Web & Programming: $skill_web_programming <br>";
    echo "Tempat Domisili: $tempat_domisili <br>";
    echo "Email: $email <br>";
    echo "IPK: $ipk <br>";
    echo "Status: $status <br>";
}
?>
