<?php
/**
 * looping (perulangan) -> mengulang baris kode perintah
 * 
 * type of looping -> for, while, do..while
 * 
 * Konsep looping :
 * 1. titik awal
 * 2. titik akhir
 * 3. perubahan nilai
 * 
 * selama kondisinya benar, looping akan berlanjut,
 * saat kondisi salah, looping akan berhenti
 */

 //case1: menampilkan bilangan kelipatan 7 mulai dari -70 sampai 100
//  $start = -70;
//  for($i = $start; $i < 100; $i+=7){
//     echo "$i ";
//  }

//case2
$person = [
    ["nama" => "Gopal", "address" => "Madrid", "age" => 40],
    ["nama" => "Kaizo", "address" => "Saturnus", "age" => 80],
    ["nama" => "Kokochi", "address" => "Pluto", "age" => 20],
];
//string nama= "Jack";
//system.out.println("Nama saya: " + nama)
//tanda titik digunakan untuk mengabungkan antara string 1 dengan string yang lain
// echo $person[0]['nama']." ".$person[0]['address']." "$person[0]['age']." | ",
// echo $person[1]['nama']." ".$person[1]['address']." "$person[1]['age']." | ",
// echo $person[2]['nama']." ".$person[2]['address']." "$person[2]['age']." | ",
//menampilkan isi dalam array
for ($i=0; $i < count($person); $i++) { 
    echo $person[$i]['nama']." ".$person[$i]['address']." ".$person[$i]['age']." | ";
}
?>