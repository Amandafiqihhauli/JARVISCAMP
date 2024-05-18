<?php
//penjumlahan
function tambah($bil1, $bil2) {
    return $bil1 + $bil2;
}

//pengurangan
function kurang($bil1, $bil2) {
    return $bil1 - $bil2;
}
//perkalian
function kali($bil1, $bil2) {
    return $bil1 * $bil2;
}

//pembagian
function bagi($bil1, $bil2) {
    if ($bil2 == 0) {
        return "pembilang tidak boleh dengan 0";
    }
    return $bil1 / $bil2;
}



//tampilkan
$angka1 = 20;
$angka2 = 5;

echo "$angka1 + $angka2 =" . tambah($angka1, $angka2); 
echo "<br> $angka1 - $angka2 = " . kurang($angka1, $angka2); 
echo "<br>$angka1 x $angka2 = " . kali($angka1, $angka2);
echo "<br> $angka1 / $angka2 = " . bagi($angka1, $angka2); 
?>
