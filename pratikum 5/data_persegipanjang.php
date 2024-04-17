<?php
require_once "./class_persegipanjang.php";

$pj1 = new PersegiPanjang(10, 3);

echo "<h2>Rumus Persegi Panjang</h2>";

echo "<p><strong>Panjang:</strong> " . $pj1->getPanjang() . "</p>";
echo "<p><strong>Lebar:</strong> " . $pj1->getLebar() . "</p>";
echo "<p><strong>Luas:</strong> " . $pj1->getLuas() . "</p>";
echo "<p><strong>Keliling:</strong> " . $pj1->getKeliling() . "</p>";
?>
