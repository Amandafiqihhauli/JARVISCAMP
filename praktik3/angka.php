<?php
// fungsi bilangan ganjil
function angka_ganjil($bil1, $bil2) {
    $angka = $bil1;
    
    while ($angka <= $bil2) {
        if ($angka % 2 != 0) {
            echo $angka . "\n";
        }
        $angka++;
    }
}

// fungsi bilangan genap
function angka_genap($bil_satu, $bil_dua) {
    $bil = $bil_satu;
    
    while ($bil <= $bil_dua) {
        if ($bil % 2 == 0) {
            echo $bil . "\n";
        }
        $bil++;
    }
}

// tampilkan
echo "ini adalah angka ganjil antara 1-30 = ";
echo "\n";
angka_ganjil(1, 30);

echo "<br> ini adalah angka genap antara 1-30 = ";
echo "\n";
angka_genap(1, 30);
?>
