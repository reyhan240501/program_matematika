<?php

// Banner Aplikasi

echo "Aplikasi Operasi Hitung Matematika\n";

// User Pilih Menu

$menu=["Penjumlahan","Pengurangan","Perkalian","Pembagian","Perpangkatan"];


$berhenti=true;

while($berhenti)
{
    $nomor=1;
    foreach($menu as $data)
    {
        echo "$nomor.$data \n";
        $nomor++;
    }

    $pilih_menu=readline("Pilih menu :");

    if($pilih_menu==1)
    {
        // Fitur Penjumlahan
        include "penjumlahan.php";

    }elseif($pilih_menu==2)
    {
        // Fitur Pengurangan
        include "pengurangan.php";
    
    }elseif($pilih_menu==3)
    {
        // Fitur Perkalian
        include "perkalian.php";

    }elseif($pilih_menu==4)
    {
        // Fitur Pembagian
        include "pembagian.php";

    }elseif($pilih_menu==5)
    {
        // Fitur Perpangkatan
        include "perpangkatan.php";
    
    }else{

        // Jika tidak memilih menu yang tersedia

        echo "Anda memilih operasi yang tidak tersedia!!!";
    break;
    }



    // User Keluar

    // $ulangi=readline("Ulangi Lagi : ");

    // if($ulangi=="no")
    // {
    //     $berhenti=false;
    // }
}