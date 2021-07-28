<?php
/** first case */
$product = [
    ["nama" => "Lenava", "qty" => 4, "price" => 1000000],
    ["nama" => "Aser", "qty" => 2, "price" => 1500000],
    ["nama" => "Toyiba", "qty" => 6, "price" => 2000000],
    ["nama" => "Doll", "qty" => 1, "price" => 1200000],
    ["nama" => "Susa", "qty" => 3, "price" => 1700000],
];

/** buat code untuk menghitung total jumlah yang dibeli */

// cara pertama

$jumlahTotal = 0;
foreach ($product as $data) {
     $jumlahTotal += $data['qty'] * $data['price'];
};
echo $jumlahTotal;

// cara kedua (Pak Zakaria)

$total = 0;
for ($i=0; $i < count($product); $i++) { 
    $totalEachItem = $product[$i]["qty"] * $product[$i]["price"];
    $total += $totalEachItem;
    // $total = $total + $totalEachItem;
}
echo "Total of all item is $total"

/** second case
 * buat fungsi untuk menghitung bilangan faktorial
 * faktorial(5) -> 5 * 4 * 3 * 2 * 1 = 120 
 */

/**
 * fungsi -> void dan non-void
 * void -> fungsi yang tidak mengembalikan value
 * non-void -> fungsi yang mengembalikan value (return value)
 */

// cara pertama
   function faktorial($x){
      $angka = 1;
      $faktorial = 1;
      while($angka <= $x){
          $faktorial = $faktorial * $angka;
          $angka = $angka + 1;
      }
      return $faktorial;
 }

 echo faktorial(5);

 //cara kedua (Pak Zakaria)
    function faktorial($number) {
     $result = 1;
     for ($i=$number; $i >= 1 ; $i--) { 
         $result = $result * $i;
     }
     return $result;
 }
 echo "Faktorial of 5 is ". faktorial(5);
?>