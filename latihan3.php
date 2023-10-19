<?php
$var_angkaPertama = $_GET['inputAngka1'];
$var_angkaKedua = $_GET['inputAngka2'];
$var_operator = $_GET['inputfungsi'];

echo "Angka Pertama : " . $_GET['inputAngka1'] . "<br>";
echo "Angka Kedua : " . $_GET['inputAngka2'] . "<br>";

if ($var_operator == "Penjumlahan") {
    $var_hitung = $var_angkaPertama+$var_angkaKedua;
    echo "Hasil Penjumlahan : " . $var_hitung;
    
} elseif ($var_operator == "Perkalian") {
    $var_hitung = $var_angkaPertama*$var_angkaKedua;
    echo "Hasil Perkaliannya : " . $var_hitung;

} elseif ($var_operator == "Pengurangan") {
    $var_hitung = $var_angkaPertama-$var_angkaKedua;
    echo "Hasil Pengurangan Angka Pertama - Angka Kedua : " . $var_hitung;

} elseif ($var_operator == "Pembagian") {
    $var_hitung = $var_angkaPertama/$var_angkaKedua;
    echo "Hasil Pengurangan Angka Pertama - Angka Kedua : " . $var_hitung;
}

?>