<?php
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

# hitung nilai rata-rata
$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

# Tampilkan data

echo "Matematika: {$nilaiMatematika} <br />";
echo "IPA: {$nilaiIPA} <br />";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br />";
echo "Rata-rata: {$rataRata} <br />";

# Lihat tipe data dari variabel $rataRata
var_dump($rataRata);