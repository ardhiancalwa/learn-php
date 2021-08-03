<?php
class Penggunaan{
    public $biayaAdmin, $jumlahPenggunaan, $tagihan;
    function __construct($jumlahPenggunaan) {
        $this->biayaAdmin = 10000;
        $this->jumlahPenggunaan = $jumlahPenggunaan;

        if ($jumlahPenggunaan <= 10) {
             $this->tagihan = 2000;
             $this->jumlahPenggunaan = $jumlahPenggunaan;
        } elseif ($jumlahPenggunaan > 10 && $jumlahPenggunaan <= 20) {
             $this->tagihan = 3000;
             $this->jumlahPenggunaan = $jumlahPenggunaan-10;
             $this->biayaAdmin = 10000 + 20000;
        } elseif ($jumlahPenggunaan > 20 && $jumlahPenggunaan <= 30){
             $this->tagihan = 4000;
             $this->jumlahPenggunaan = $jumlahPenggunaan-20;
             $this->biayaAdmin = 10000 + 50000;
        } elseif ($jumlahPenggunaan > 30){
             $this->tagihan = 5000;
             $this->jumlahPenggunaan = $jumlahPenggunaan-30;
             $this->biayaAdmin = 10000 + 90000;
        }
    }
}

class Pelanggan {
    public $id, $nama, $penggunaan;
    public function __construct($id, $nama, Penggunaan $penggunaan) 
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->penggunaan = $penggunaan;
    }
    public function countBiaya()
    {
        $jumlahPenggunaan = $this->penggunaan->jumlahPenggunaan;
        $biayaAdmin = $this->penggunaan->biayaAdmin;
        $tagihan = $this->penggunaan->tagihan;
        
        $jumlah = $jumlahPenggunaan * $tagihan + $biayaAdmin;
        return $jumlah;
    }
}
//create object
$penggunaan_Ali = new Penggunaan (18);
$penggunaan_Budi = new Penggunaan (11);
$penggunaan_Dani = new Penggunaan (6);
$penggunaan_Edi= new Penggunaan (32);
$penggunaan_Umar = new Penggunaan (26);

$Ali = new Pelanggan ("1","Ali",$penggunaan_Ali);
echo nl2br("\n Tagihan ".$Ali->nama." dengan nomor ID ".$Ali->id." sebesar ".$Ali->countBiaya());

$Budi = new Pelanggan ("2","Budi",$penggunaan_Budi);
echo nl2br("\n Tagihan ".$Budi->nama." dengan nomor ID ".$Budi->id." sebesar ".$Budi->countBiaya());

$Dani = new Pelanggan ("3","Dani",$penggunaan_Dani);
echo nl2br("\n Tagihan ".$Dani->nama." dengan nomor ID ".$Dani->id." sebesar ".$Dani->countBiaya());

$Edi = new Pelanggan ("4","Edi",$penggunaan_Edi);
echo nl2br("\n Tagihan ".$Edi->nama." dengan nomor ID ".$Edi->id." sebesar ".$Edi->countBiaya());

$Umar = new Pelanggan ("5","Umar",$penggunaan_Umar);
echo nl2br("\n Tagihan ".$Umar->nama." dengan nomor ID ".$Umar->id." sebesar ".$Umar->countBiaya());

// cara pak zakaria
class PDAM{
    public $id, $nama, $jumlah_penggunaan, $admin = 10000;
    public function __construct($id, $nama, $jumlah_penggunaan)
    {
        $this->id = $id;
        $this->nama = $nama;
        if ($jumlah_penggunaan < 10) {
            $this->jumlah_penggunaan = 10;    
        }
        else {
            $this->jumlah_penggunaan = $jumlah_penggunaan;
        }

    }
    public function getBiaya()
    {
        $tarif = 0;
        if ($this->jumlah_penggunaan <= 10) {
            $tarif = 2000;
        }
        elseif ($this->jumlah_penggunaan > 10 && $this->jumlah_penggunaan <= 20) {
            $tarif = 3000;
        }
        elseif ($this->jumlah_penggunaan > 20 && $this->jumlah_penggunaan <=30) {
            $tarif = 4000;
        }
        elseif ($this->jumlah_penggunaan > 30) {
            $tarif = 5000;
        }

        $hasil = $this->jumlah_penggunaan * $tarif + $this->admin;
        return $hasil;
    }
}

$pelanggan = [
    new PDAM(1, "Ali", 9),
    new PDAM(2, "Budi", 40),
    new PDAM(3, "Dani", 60),
    new PDAM(4, "Edi", 25),
    new PDAM(5, "Umar", 14)
];

for ($i=0; $i < count($pelanggan) ; $i++) { 
    echo nl2br("Pelanggan: ".$pelanggan[$i]->nama ." Biaya: ".$pelanggan[$i]->getBiaya()."\n");
}
?>