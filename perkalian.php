<?php
$keluar=true;

while($keluar)
{
    // apll
    echo "============== aplikasi perkalian =============== \n";

    // input

    $angka_pertama=readline("masukan angka pertama :");
    $angka_kedua=readline("masukan angka kedua :");

    // validasi

    if(!is_numeric($angka_pertama) || !is_numeric($angka_kedua))
    {
        echo "maaf input hanya bisa angka bro !! \n";
        continue;

    }
    // hasil

    echo"\n hasil dari $angka_pertama * $angka_kedua adalah : ".($angka_pertama*$angka_kedua)."\n";

    //cek logika user untuk mengilangi

    // $ulang=readline("berhitung kembali ? (ya tapi tidak/tidak tapi ya) :");

    // if($ulang!=="ya" || $ulang=="tidak"){
    //     $keluar=false;
    // }

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