<?php
require_once './class_mahasiswa.php';

$faiz = new Mahasiswa('02011', 'Faiz Fikri');
$alissa = new Mahasiswa('02012', 'Alissa Khairunnisa');
$rosalie = new Mahasiswa('01011', 'Rosalie Naurah');
$defghi = new Mahasiswa('01012', 'Defghi Muhammad');

$faiz->prodi = 'TI';
$faiz->thn_angkatan = '2012';
$faiz->ipk = 3.8;

$alissa->prodi = 'TI';
$alissa->thn_angkatan = '2012';
$alissa->ipk = 3.9;

$rosalie->prodi = 'SI';
$rosalie->thn_angkatan = '2012';
$rosalie->ipk = 3.46;

$defghi->prodi = 'SI';
$defghi->thn_angkatan = '2012';
$defghi->ipk = 3.2;

$ar_mahasiswa = [$faiz, $alissa, $rosalie, $defghi];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<table class="table mt-3">
  <thead>
    <tr>
    <th scope="col">No</th>
    <th scope="col">NIM</th>
    <th scope="col">Nama</th>
    <th scope="col">Prodi</th>
    <th scope="col">Thn Angkatan</th>
    <th scope="col">IPK</th>
    <th scope="col">Predikat</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($ar_mahasiswa as $key => $mahasiswa): ?>
    <tr>
      <th scope="row"><?= ++$key ?></th>
      <td><?= $mahasiswa->nim ?></td>
      <td><?= $mahasiswa->nama ?></td>
      <td><?= $mahasiswa->prodi ?></td>
      <td><?= $mahasiswa->thn_angkatan ?></td>
      <td><?= $mahasiswa->ipk ?></td>
      <td><?= $mahasiswa->predikat_ipk() ?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>