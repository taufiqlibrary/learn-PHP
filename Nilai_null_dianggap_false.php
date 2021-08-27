<?php 

$nilai = null;

if ($nilai) {
	echo "dianggap true";
} else {
	echo "dianggap false";
}

if (@$namaLengkap) {
	echo "Jika variabel namaLengkap telah didefinisikan sebelumnya dan ia bukan 0 atau string kosong atau null";
} else {
	echo "Jika variabel namaLengkap tidak pernah didefinisikan sebelumnya. Tanda @ membuatnya bernilai NULL jika belum didefinisikan sebelumnya";
}