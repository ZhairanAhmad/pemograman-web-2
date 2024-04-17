<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <form method="POST" action="form_nilai.php">
        <h2>Form Nilai Siswa</h2>
        <hr>
        <div class="form-group row mt-3 mx-3">
            <label for="Nama Lengkap" class="col-2 col-form-label">Nama Lengkap</label>
            <div class="col-6">
                <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group row mt-3 mx-3">
            <label class="col-2 col-form-label" for="Mata Kuliah">Mata Kuliah</label>
            <div class="col-6">
                <select id="matkul" name="matkul" class="custom-select" required="required">
                    <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                    <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                    <option value="UIUX">UIUX</option>
                </select>
            </div>
        </div>
        <div class="form-group row mt-3 mx-3">
            <label for="Nilai UTS" class="col-2 col-form-label">Nilai UTS</label>
            <div class="col-6">
                <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row mt-3 mx-3">
            <label for="Nilai UAS" class="col-2 col-form-label">Nilai UAS</label>
            <div class="col-6">
                <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row mt-3 mx-3">
            <label for="Nilai Tugas" class="col-2 col-form-label">Nilai Tugas/Praktikum</label>
            <div class="col-6">
                <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row mt-3 mx-3">
            <div class="offset-2 col-6">
                <input type="submit" name="proses" class="btn btn-primary">
            </div>
        </div>
    </form>
    <hr>
    <?php
    $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
    $nama_siswa = isset($_POST['nama']) ? $_POST['nama'] : '';
    $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : '';
    $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
    $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
    $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';    

    if (!empty($proses)) {
        echo 'proses : ' . $proses;
        echo '<br/>Nama : ' . $nama_siswa;
        echo '<br/>Mata Kuliah : ' . $mata_kuliah;
        echo '<br/>Nilai UTS : ' . $nilai_uts;
        echo '<br/>Nilai UAS : ' . $nilai_uas;
        echo '<br/>Nilai Tugas Praktikum : ' . $nilai_tugas;

        $total_nilai = 0.3 * $nilai_uts + 0.35 * $nilai_uas + 0.35 * $nilai_tugas;
        if ($total_nilai > 55) {
            echo '<br/>Status : LULUS';
        } else {
            echo '<br/>Status : TIDAK LULUS';
        }

        $grade = 0;
        if ($total_nilai >= 0 && $total_nilai <= 35) {
            $grade = 'E';
        } elseif ($total_nilai >= 36 && $total_nilai <= 55) {
            $grade = 'D';
        } elseif ($total_nilai >= 56 && $total_nilai <= 69) {
            $grade = 'C';
        } elseif ($total_nilai >= 70 && $total_nilai <= 84) {
            $grade = 'B';
        } elseif ($total_nilai >= 85 && $total_nilai <= 100) {
            $grade = 'A';
        } elseif ($total_nilai < 0 || $total_nilai > 100) {
            $grade = 'I';
        } else {
            echo 'Gunakan angka pada nilai';
        }
        echo '<br/>Grade : ' . $grade;

        $predikat = 0;
        switch ($grade) {
            case 'E':
                $predikat = 'Sangat Kurang';
                break;
            case 'D':
                $predikat = 'Kurang';
                break;
            case 'C':
                $predikat = 'Cukup';
                break;
            case 'B':
                $predikat = 'Memuaskan';
                break;
            case 'A':
                $predikat = 'Sangat Memuaskan';
                break;
            case 'I':
                $predikat = 'Tidak Ada';
                break;
            default:
                $predikat = 'Grade tidak valid';
        }

        echo '<br/>Predikat : ' . $predikat;
    }
    ?>
</body>

</html>