<?php
// Aplikasi Perpangkatan

$keluar=true;

while($keluar)
{
    echo "======= Aplikasi Perpangkatan ======= !!!\n";

    $angka_pertama=readline("Masukkan angka pertama  : ");
    $angka_kedua=readline("Masukkan angka kedua  : "); 

    
    // Validasi Input
    
    if(!preg_match('/^[0-9]*$/', $angka_pertama) || (!preg_match('/^[0-9]*$/', $angka_kedua))){
        echo "Oops! Input tidak diijinkan ...!";
        continue;
    }
    

    // Tampilan Hasil Perpangkatan

    
    echo "hasil dari $angka_pertama ** $angka_kedua adalah : ".($angka_pertama ** $angka_kedua)."\n";

    // Cek logika User Untuk Mengulangi

//     $ulangi=readline("Ulangi lagi (yes/no) :");
//     if($ulangi=="yes"){
//         $keluar=true;
//     }elseif ($ulangi=="no"){
//         $keluar=false;
//     }else{
//     break;
//     }
    
//    if($ulangi=="no")
//     {
//         $keluar=false;
//     }


//     if($ulangi=="yes")
//     {
//         $keluar=true;
//     }

$ulangi=readline("Apakah ingin kembali ke menu utama(yes/no/exit) :");

    if($ulangi=="yes")
    {
        // Fitur Penjumlahan
        include "matematika.php";
    }elseif($ulangi=="no"){
        $keluar=true;
    }else{
    exit;
    }

}

?>