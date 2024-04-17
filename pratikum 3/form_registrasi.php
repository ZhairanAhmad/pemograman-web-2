<?php
    $prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika", "BD"=>"Bisnis Digital"];
    $skill = ["HTML"=>10, "CSS"=>10, "JavaScript"=>20, "RWD Bootstrap"=>20, "PHP"=>30, "Python"=>30, "Java"=>50];
    $domisili = ["Jakarta", "Bogor", "Depok", "Tanggerang", "Bekasi", "Lainnya"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-6">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        fieldset {
            background-color: beige;
        }
    </style>
</head>

<body>
    <div class="container mt-5 mx-10">
        <fieldset>
            <legend>Form Registrasi IT Club Data Science</legend>
            <form method="POST" action="">
                <div class="form-group row">
                    <label for="nim" class="col-3 col-form-label">NIM</label>
                    <div class="col-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-adn"></i>
                                </div>
                            </div>
                            <input id="nim" name="nim" type="text" required="required" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-3 col-form-label">Nama Lengkap</label>
                    <div class="col-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-book"></i>
                                </div>
                            </div>
                            <input id="nama" name="nama" type="text" required="required" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-3">Jenis Kelamin</label>
                    <div class="col-6">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jenis" id="jenis_0" type="radio" required="required" class="custom-control-input" value="L">
                            <label for="jenis_0" class="custom-control-label">Laki-Laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jenis" id="jenis_1" type="radio" required="required" class="custom-control-input" value="P">
                            <label for="jenis_1" class="custom-control-label">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prodi" class="col-3 col-form-label">Program Studi</label>
                    <div class="col-6">
                        <select id="prodi" name="prodi" required="required" class="custom-select">
                        <?php foreach($prodi as $k => $v) : ?>
                            <option value="<?= $k ?>"><?= $v ?></option>
                        <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-3">Skill Web & Programming</label>
                    <div class="col-6">
                        <?php foreach($skill as $k => $v) : ?>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="<?= $k ?>" type="checkbox" class="custom-control-input" value="<?= $k ?>">
                            <label for="<?= $k ?>" class="custom-control-label"><?= $k ?></label>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="domisili" class="col-3 col-form-label">Tempat Domisili</label>
                    <div class="col-6">
                        <select id="domisili" name="domisili" class="custom-select" required="required">
                            <?php foreach($domisili as $v) : ?>
                            <option value="<?= $v ?>"><?= $v ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-3 col-form-label">Email</label>
                    <div class="col-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-gg-circle"></i>
                                </div>
                            </div>
                            <input id="email" name="email" type="email" class="form-control" required="required">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-3 col-6">
                        <input type="submit" name="proses" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </fieldset>

        <?php
        if(isset($_POST['proses'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis'];
        $prodi = $_POST['prodi'];
        $skill_dipilih = $_POST['skill'];
        $skor_skill = 0;
        foreach($skill_dipilih as $sk) {
            $skor_skill += $skill[$sk];
        }
        $kategori_skill = 0;
        if ($skor_skill <= 0) {
            $kategori_skill = 'Tidak Memadai';
        } elseif ($skor_skill >= 0 && $skor_skill <= 40) {
            $kategori_skill = 'Kurang';
        } elseif ($skor_skill >= 40 && $skor_skill <= 60) {
            $kategori_skill = 'Cukup';
        } elseif ($skor_skill >= 60 && $skor_skill <= 100) {
            $kategori_skill = 'Baik';
        } elseif ($skor_skill >= 100 && $skor_skill <= 170) {
            $kategori_skill = 'Sangat Baik';
        } else {
            echo 'Kategori skill tidak ada';
        }
        $domisili = $_POST['domisili'];
        $email = $_POST['email'];

        echo '<br/>NIM : ' . $nim;
        echo '<br/>Nama Lengkap : ' . $nama;
        echo '<br/>Jenis Kelamin : ' . $jenis_kelamin;
        echo '<br/>Program Studi : ' . $prodi;
        echo '<br/>Skill : ' . implode(', ', $skill_dipilih);
        echo '<br/>Skor Skill : ' . $skor_skill;
        echo '<br/>Kategori Skill : ' . $kategori_skill;
        echo '<br/>Domisili : ' . $domisili;
        echo '<br/>Email : ' . $email;
        }
        ?>
    </div>
</body>

</html>