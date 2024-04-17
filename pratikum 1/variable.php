<?php

$nama = 'Kafi';
$umur = 18;
$berat = 50;

echo "Nama saya <b>$nama</b>, <br/> Saya berumur" . $umur . " dan memiliki berat " . $berat . "kg";

echo "<br/>";
echo "<br/>";

echo 'Dokumen Root' . $_SERVER["DOCUMENT_ROOT"];
echo '<br/>Nama File' . $_SERVER["PHP_SELF"];

echo "<br/>";
echo "<br/>";

define('PHI', 3.14);
define('DBNAME', 'inventori');
define('DBSERVER', 'localhost');

echo "PHI = " . PHI;
echo "<br/>";
echo "DBNAME = " . DBNAME;
echo "<br/>";
echo "DBSERVER = " . DBSERVER;

echo "<br/>";
echo "<br/>";

$jari = 8;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo 'Luas lingkaran dengan jari ' . $jari . ' : ' . $luas;
echo '<br/>Kelilingnya : ' . $kll;

echo "<br/>";
echo "<br/>";

echo 'Nama databasenya : ' . DBNAME;
echo '<br/>Lokasi databasenya ada di ' . DBSERVER;
