<?php require_once 'header.php' ?>
<?php require_once 'sidebar.php' ?>
<div class="content-wrapper">
    <div class="content">
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
</div>
</div>

    <!-- Skrip JavaScript Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<?php require_once 'footer.php' ?>
