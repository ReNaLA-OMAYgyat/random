<?php
session_start();
if (!isset($_SESSION['saldo'])){
    $_SESSION['saldo'] = 100000;
};
$uang = $_SESSION['saldo'];
$nama = $_POST['produk'];
$harga = $_POST['harga'];

if($uang < $harga){
    echo "uang tidak cukup";
}else{
    $_SESSION['saldo'] = $uang - $harga;
    echo "Anda membeli " . $nama . " dengan harga " . $harga . " kembalian anda adalah " . ($uang - $harga);
    echo "<br>uang cukup";
}

echo "<br><a href = 'sahrukshop.php'>kembali</a>";
