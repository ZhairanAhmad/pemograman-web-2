<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahmad Hilmy-PHP</title>
    <!-- Tautan CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Data Siswa</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Berat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nama = 'HILMY';
                $umur = 18;
                $berat = 50;
                echo "<tr>";
                echo "<td>$nama</td>";
                echo "<td>$umur</td>";
                echo "<td>$berat kg</td>";
                echo "</tr>";
                ?>
            </tbody>
        </table>

        <h2>Data Konstanta</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Konstanta</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
            <?php
                define('PHI', 3.14);
                define('DBNAME', 'inventori');
                define('DBSERVER', 'localhost');
                echo "<tr>";
                echo "<td>PHI</td>";
                echo "<td>" . PHI . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>DBNAME</td>";
                echo "<td>" . DBNAME . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>DBSERVER</td>";
                echo "<td>" . DBSERVER . "</td>";
                echo "</tr>";
                ?>
            </tbody>
        </table>
        <h2>Data luas lingkaran</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Luas Lingkaran</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
            <?php
               $jari = 8;
               $luas = PHI * $jari * $jari;
               $kll = 2 * PHI * $jari;
               echo "<tr>";
               echo "<td>Luas Lingkaran</td>";
               echo "<td>$luas</td>";
               echo "</tr>";
               
               echo "<tr>";
               echo "<td>Keliling</td>";
               echo "<td>$kll</td>";
               echo "</tr>";  
               echo "</table>";
                ?>
            </tbody>
        </table>

        <h2>Data Buah</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Buah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];
                foreach($ar_buah as $k => $v) {
                    echo "<tr>";
                    echo "<td>".($k+1)."</td>";
                    echo "<td>$v</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Skrip JavaScript Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
