<?php
$ar_prodi = [
    "SI" => "Sistem Informasi",
    "TI" => "Teknik Informatika",
    "BD" => "Bisnis Digital"
];
$ar_skill = [
    "HTML" => 10,
    "CSS" => 10,
    "JavaScript" => 20,
    "RWD Bootstrap" => 20,
    "PHP" => 30,
    "Python" => 30,
    "Java" => 50
];
$ar_domisili = [
    "Jakarta",
    "Bogor",
    "Depok",
    "Tanggerang",
    "Bekasi",
    "Lainnya"
];
?>
<?php require_once 'header.php' ?>
<?php require_once 'sidebar.php' ?>
<div class="content-wrapper">
    <div class="content">
        <div class="container">
        <fieldset class="py-5">
            <legend>Form Registrasi IT Club Data Science</legend>
            <form method="post" action="proses_registrasi.php"> 
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="nim" name="nim">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-2 col-form-label font-weight-bold">Jenis Kelamin</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="jenis_kelamin" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki">
                                <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="jenis_kelamin" id="jk_1" type="radio" class="custom-control-input" value="Perempuan">
                                <label for="jk_1" class="custom-control-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Program Studi</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="prodi" name="prodi">
                            <?php foreach ($ar_prodi as $key => $value): ?>
                                <option value="<?= $key ?>">
                                    <?= $value ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Skill Web & Programming</label>
                    <div class="col-sm-10">
                        <?php foreach ($ar_skill as $tech => $nilai): ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="skill[]" value="<?= $tech ?>">
                                <label class="form-check-label" for="html">
                                    <?= $tech ?>
                                </label>
                            </div>
                        <?php endforeach ?>

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tempat Domisili</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="domisili" name="domisili">
                            <?php foreach ($ar_domisili as $value): ?>
                                <option value="<?= $value ?>">
                                    <?= $value ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>

                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="form-group row mt-3 mx-3">
                    <div class="offset-2 col-6">
                        <button type="submit" name="submit" class="btn btn-primary"> Submit</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
</div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<?php require_once 'footer.php' ?>
