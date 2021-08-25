<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Belajar Tipe Data PHP</title>
</head>
<body>
<h1>Belajar Tipe Data PHP</h1>

<h2>Tipe Data Integer</h2>
<?php 
#inisiasi dan inisialisasi variabel
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

# Tampilkan data dengan perintah echo
echo "Variabel a: {$a} <br />";
echo "Variabel b: {$b} <br />";
echo "Variabel c: {$c} <br />";
echo "Variabel d: {$d} <br />";
echo "Variabel e: {$e} <br />";

# Mengetahui tipe data dari variabel
var_dump($e);
echo "<br />";
?>

<h2>Tipe Data Float</h2>
<?php 

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

#hitung nilai rata-rata
$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

# Tampilkan data

echo "Matematika: {$nilaiMatematika} <br />";
echo "IPA: {$nilaiIPA} <br />";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br />";
echo "Rata-rata: {$rataRata} <br />";

# Lihat tipe data dari variabel $rataRata
var_dump($rataRata);
?>

<h2>Tipe Data Boolean</h2>
<?php 

$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo "<br />";
var_dump($apakahSiswaSudahUjian);
echo "<br />";
?>

<h2>Tipe Data String</h2>

<?php 

$namaDepan = "Ibnu";	# pakai tanda petik dua
$namaBelakang = 'Jakaria'; # pakai tanda petik satu

# menggabungkan dua variabel dengan tanda
# petik dua
$namaLengkap = "{$namaDepan} {$namaBelakang}";

# anda juga bisa menggabungkan string dengan menggunakan tanda titik (.)
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

# [Tampikan Data]
# kita bisa memasukkan variabel lain jika menggunakan tanda petik dua
echo "Nama Depan: {$namaDepan} <br />";
# adapun jika pakai tanda petik satu, kita tidak bisa memasukkan variabel
# di dalam string akan tetapi menggabungkannya dengan operator titik (.)
echo 'Nama Belakang: ' . $namaBelakang . '<br />';

echo $namaLengkap;
?>

<h2>Tipe Data Array</h2>

<?php

$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0];
?>
</body>
</html>