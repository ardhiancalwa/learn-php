<?php
/**
 * function / method / fungsi = blok kode yang akan dijalankan ketika dipaggil
 * blok kode -> kumpulan baris kode yang diapit oleh tanda { }
 * function punya parameter -> data yang akan diolah oleh fungsi tersebut
 */

 function prokes(){
    echo "Memakai masker";
    echo "Mencuci tangan";
    echo "Mengurangi mobilitas";
 }

 function makan($nama_makanan){
    echo "Cuci tangan ";
    echo "Baca Doa ";
    echo "Masukkan makanan $nama_makanan ";
    echo "Kunyah $nama_makanan ";
    echo "Telan $nama_makanan";
 }

 //echo prokes();
 echo makan("Sosis");
 echo makan("Tahu");

?>