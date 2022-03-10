<?php
    $no1 = 3; //variabel pertama
    $no2 = 2; //variabel kedua
    $no3 = 1; //variabel ketiga

    echo "Nilai variable pertama adalah : ".$no1." <br>";
    echo "Nilai variable kedua adalah : ".$no2." <br>";
    echo "Nilai variable ketiga adalah : ".$no3." <br>";
    echo "<br>";

    $hasil1=$no1 +$no2 +$no3; //melakukan penjumlahan ketiga variable tersebut dan hasilnya disimpan di variable hasil1
    $hasil2=$no1 -$no2 -$no3; //melakukan pengurangan ketiga variable tersebut dan hasilnya disimpan di variable hasil2
    $hasil3=$no1 *$no2 *$no3; //melakukan perkalian ketiga variable tersebut dan hasilnya disimpan di variable hasil3

    echo"(".$no1." + ".$no2." + ".$no3.") Hasil Dari Penjumlahan Ketiga Variable tersebut adalah ".$hasil1." <br>";
    //menampilkan hasil penjumlahan dari ketiga variable tersebut
    echo"(".$no1." - ".$no2." - ".$no3.") Hasil Pengurangan Ketiga Variable tersebut adalah ".$hasil2." <br>";
    //menampilkan hasil pengurangan dari ketiga variable tersebut
    echo"(".$no1." * ".$no2." * ".$no3.") Hasil Perkalian Ketiga Variable tersebut adalah ".$hasil3." <br>";
    //menampilkan hasil perkalian dari ketiga variable tersebut
    ?>