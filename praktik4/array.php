<?php
$products = [
    ["barang" => "Printer", "Harga" => 1200000, "Deskripsi" => "Printer merk HP", "Stok" => 15],
    ["barang" => "Tablet", "Harga" => 2000000, "Deskripsi" => "Tablet merk Samsung", "Stok" => 8],
    ["barang" => "Mouse", "Harga" => 150000, "Deskripsi" => "Mouse merk Logitech", "Stok" => 50],
    ["barang" => "Speaker", "Harga" => 500000, "Deskripsi" => "Speaker merk JBL", "Stok" => 25],
    ["barang" => "Headset", "Harga" => 250000, "Deskripsi" => "Headset merk Sony", "Stok" => 30]
];

// fungsinya
function produk($products) {
    foreach ($products as $product) {
        echo "Nama Barang   : " . $product["barang"];
        echo "<br> Harga    : Rp " . number_format($product["Harga"], 0, ',', '.');
        echo "<br> Deskripsi: " . $product["Deskripsi"];
        echo "<br> Stok     : " . $product["Stok"];
        echo "<br><br>";
       
    }
}

//tampilkan
echo "Semua Produk: <br>";
echo "<br><br>";
produk($products);
?>
