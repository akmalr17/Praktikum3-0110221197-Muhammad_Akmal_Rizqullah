<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h3 class="m-3">Form Nilai Siswa</h3>
    <hr>
    <div class="m-5 border border-info p-3 rounded">
        <form action="nilai_siswa.php" method="POST" autocomplete="off">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-8">
            <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4 col-form-label" for="matkul">Mata Kuliah</label> 
            <div class="col-8">
            <select id="matkul" name="matkul" class="custom-select">
                <option value="ddp">Dasar Dasar Pemrograman</option>
                <option value="pw">Pemrograman Web</option>
                <option value="jarkom">Jaringan Komputer</option>
                <option value="statistik">Statistik dan Probabilitas</option>
                <option value="desain">Desain Grafis</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
            <div class="col-8">
            <input id="uts" name="uts" placeholder="Nilai UTS" type="number" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
            <div class="col-8">
            <input id="uas" name="uas" placeholder="Nilai UAS" type="number" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
            <div class="col-8">
            <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="number" class="form-control" required="required">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="proses" type="submit" class="btn btn-dark">Submit</button>
            </div>
        </div>
        </form>
    </div>

    <div class="m-5 border border-info p-3 rounded">
        <?php 
        require_once 'libfungsi.php';
            if(isset($_POST['proses'])){
                $nama = $_POST['nama'];
                $matkul = $_POST['matkul'];
                $uts = $_POST['uts'];
                $uas = $_POST['uas'];
                $tugas = $_POST['tugas'];
                $nilai_akhir = (($uts *30/100) + ($uas * 35/100) + ($tugas * 35/100));
                $hasil = hasil_kelulusan($nilai_akhir);
                $grade = grade($nilai_akhir);
                $predikat = predikat($grade);

                switch($matkul){
                    case "ddp" : $kuliah = "Dasar Dasar Pemrograman"; break;
                    case "pw" : $kuliah = "Pemrograman Web"; break;
                    case "jarkom" : $kuliah = "Jaringan Komputer"; break;
                    case "statistik" : $kuliah = "Statistik dan Probabilitas"; break;
                    case "desain" : $kuliah = "Desain Grafis"; break;
                    default: "";
                }
                

                /*if($nilai_akhir >= 55){
                    $hasil = "LULUS";
                }else{
                    $hasil = "TIDAK LULUS";
                }*/

                /*if($nilai_akhir >= 0 and $nilai_akhir <= 35){
                    $grade = "E";
                }elseif($nilai_akhir >= 36 and $nilai_akhir <= 55){
                    $grade = "D";
                }elseif($nilai_akhir >= 56 and $nilai_akhir <=69){
                    $grade = "C";
                }elseif($nilai_akhir >= 70 and $nilai_akhir <=84){
                    $grade = "B";
                }elseif($nilai_akhir >= 85 and $nilai_akhir <= 100){
                    $grade = "A";
                }else{
                    $grade = "I";
                }*/

                /*switch($grade){
                    case "E" : $predikat = "Sangat Kurang"; break;
                    case "D" : $predikat = "Kurang"; break;
                    case "C" : $predikat = "Cukup"; break;
                    case "B" : $predikat = "Memuaskan"; break;
                    case "A" : $predikat = "Sangat Memuaskan"; break;
                    case "I" : $predikat = "Tidak ada"; break;
                }*/

                echo "Nama Lengkap : $nama <br>";
                echo "Mata Kuliah : $kuliah <br>";
                echo "Nilai UTS : $uts <br>";
                echo "Nilai UAS : $uas <br>";
                echo "Nilai Tugas/Praktikum : $tugas <br>";
                echo "Nilai Akhir : $nilai_akhir <br>";
                echo "Grade anda : $grade <br>" ;
                echo "Predikat Anda : $predikat <br>";
                echo "Hasil Akhir : $hasil <br>";
            }
        ?>
    </div>
</body>
</html>