<?php
class PDAM {
    public $id, $nama, $jumlahPenggunaan, $tarif, $biayaAdmin, $tagihan;

    public function __construct($id, $nama, $jumlahPenggunaan, $tarif, $tagihan){
        $this -> id = $id;
        $this -> nama = $nama;
        $this -> jumlahPenggunaan = $jumlahPenggunaan;
        $this -> tarif = $tarif;
        $this -> biayaAdmin = 10000;

    }
    public function getBiaya(){
        //menghitung 10 kedua
        if ($jumlahPenggunaan > 10) {
            $tarif = $tarif + 30000;
            $jumlahPenggunaan = $jumlahPenggunaan - 10;
        }else {
            $tarif = $tarif + 3000 * $jumlahPenggunaan;
            $jumlahPenggunaan = 0;
        }
            
        //menghitung 10 ketiga
        if ($jumlahPenggunaan > 10) {
            $tarif = $tarif + 40000;
            $jumlahPenggunaan = $jumlahPenggunaan - 10;
        }else {
            $tarif = $tarif + 4000 * $jumlahPenggunaan;
            $jumlahPenggunaan = 0;
            }
           
        //menghitung selanjutnya
        if ($jumlahPenggunaan > 10){
            $tarif = $tarif + 3000 * $jumlahPenggunaan;
        }
           
            return $tarif;
            }
    }
}

//create object
$person1 = new PDAM("Ali", $jumlahPenggunaan = 12);
 echo "ID : ".$id;
 echo "Nama : ".$nama;
 echo "Total Tagihan : ".$person1 -> getBiaya();

 echo nl2br("\n"); // nl2br itu digunakan untuk apply break line


?>