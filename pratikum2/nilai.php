<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Mahasiswa</title>
    <style>
        h2 {
            text-align: center;
        }
        .result {
            margin-top: 20px;
        }
        .result p {
            margin: 5px 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; 
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Penilaian Mahasiswa</h2>
        <form method="POST" action="nilai.php">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required placeholder="Masukan Nama"><br>

            <label for="matkul">Mata Kuliah:</label>
            <select id="matkul" name="matkul" required>
                <option value="">Pilih Mata Kuliah</option>
                <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                <option value="Basis Data">Basis Data</option>
                <option value="Pemrograman Web">Pemrograman Web</option>
            </select><br>

            <label for="uts">Nilai UTS:</label>
            <input type="number" id="uts" name="uts" required><br>

            <label for="uas">Nilai UAS:</label>
            <input type="number" id="uas" name="uas" required><br>

            <label for="tugas">Nilai Tugas:</label>
            <input type="number" id="tugas" name="tugas" required><br>

            <input type="submit" name="submit" value="Hitung">
        </form>
    </div>

    <div class="container">
        <h2>Hasil Penilaian</h2>
        <?php

        if (isset($_POST['submit'])) {
            $nama_siswa = $_POST['nama'];
            $mata_kuliah = $_POST['matkul'];
            $nilai_uts = $_POST['uts'];
            $nilai_uas = $_POST['uas'];
            $nilai_tugas = $_POST['tugas'];

            $total_nilai = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

            echo '<div class="result">';
            echo '<p>Nama: ' . $nama_siswa . '</p>';
            echo '<p>Mata Kuliah: ' . $mata_kuliah . '</p>';

            if ($total_nilai > 55) {
                echo "<p>Siswa dinyatakan LULUS.</p>";
            } else {
                echo "<p>Siswa dinyatakan TIDAK LULUS.</p>";
            }
            echo "<p>Total Nilai: $total_nilai</p>";

            if ($total_nilai >= 0 && $total_nilai <= 35) {
                echo "<p>Grade: E</p>";
            } elseif ($total_nilai >= 36 && $total_nilai <= 55) {
                echo "<p>Grade: D</p>";
            } elseif ($total_nilai >= 56 && $total_nilai <= 69) {
                echo "<p>Grade: C</p>";
            } elseif ($total_nilai >= 70 && $total_nilai <= 84) {
                echo "<p>Grade: B</p>";
            } elseif ($total_nilai >= 85 && $total_nilai <= 100) {
                echo "<p>Grade: A</p>";
            } else {
                echo "<p>Grade: I</p>";
            }

            switch ($total_nilai) {
                case ($total_nilai >= 0 && $total_nilai <= 35):
                    echo "<p>Predikat: Sangat Buruk</p>";
                    break;
                case ($total_nilai >= 36 && $total_nilai <= 55):
                    echo "<p>Predikat: Buruk</p>";
                    break;
                case ($total_nilai >= 56 && $total_nilai <= 69):
                    echo "<p>Predikat: Cukup</p>";
                    break;
                case ($total_nilai >= 70 && $total_nilai <= 84):
                    echo "<p>Predikat: Baik</p>";
                    break;
                case ($total_nilai >= 85 && $total_nilai <= 100):
                    echo "<p>Predikat: Sangat Baik</p>";
                    break;
                default:
                    echo "<p>Predikat: Tidak Valid</p>";
            }
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
