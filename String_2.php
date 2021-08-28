<?php 

echo "Baris\nbaru <br />"; # ini hanya bekerja di console, tidak di HTML
echo 'Baris\nbaru <br />'; # ditampilkan apa adanya, \n tidak direplace dengan sesuatu

echo "Halo\rDunia <br />"; # Halo Dunia
echo 'Halo\rDunia <br />'; # Halo\rDunia

echo "<pre>Halo\tDunia!</pre>"; # Halo Dunia!
echo '<pre>Halo\tDunia!</pre>'; # Halo\tDunia!

echo "Katakanlah \"Tidak pada narkoba!\" <br />"; # Katakanlah "Tidak pada narkoba!"
echo "Katakanlah \'Tidak pada narkoba!\' <br />"; # Katakanlah 'Tidak pada narkoba!'