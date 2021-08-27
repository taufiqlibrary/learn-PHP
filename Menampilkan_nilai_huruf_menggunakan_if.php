<?php 

$nilai = 56;

echo "Nilai: {$nilai} <br />";

if ($nilai >=85 and $nilai <= 100) {
	echo "Predikat: A";
} elseif ($niai >= 75) {
	echo "Predikat: B";
} elseif ($niai >=60) {
	echo "Predikat: C";
} elseif ($niai >=50) {
	echo "Predikat: D";
} elseif ($niai >=0) {
	echo "Predikat: E";
} else {
	echo "Nilai tidak valid.";
}

echo "<br />"; # untuk membuat baris baru pada HTML