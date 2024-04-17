<?php
require_once "./class_lingkaran.php";

echo "<h2>Rumus Lingkaran</h2>";

echo "<p><strong>NILAI PHI:</strong> " . Lingkaran::PHI . "</p>";

$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(7);

echo "<h3>Lingkaran 1:</h3>";
echo "<p>Luas: " . $lingkar1->getLuas() . "</p>";
echo "<p>Keliling: " . $lingkar1->getKeliling() . "</p>";

echo "<h3>Lingkaran 2:</h3>";
echo "<p>Luas: " . $lingkar2->getLuas() . "</p>";
echo "<p>Keliling: " . $lingkar2->getKeliling() . "</p>";
?>
