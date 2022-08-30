<?php
    // veriable
    // $1nama; contoh salah (karna diawali angka)
    // $#nama; contoh salah (ada simbol ditegah)
    // nama; contoh salah  (tidak ada simbol $)
    $nama = "Rizki";
    $usia = 16;
    echo "nama saya $nama <br>";
    echo "usia saya $usia tahun <br>";

    //tipe data (Integer, Float, String)
    //(boolean , Array)
    $namalengkap = "Rizki Ginat"; // strinbg
    $umur = 15; // Integer
    $nilai = 76.56; // Float
    $jomblo = TRUE; // Boolean (TRUE/FALSE)

    // Array String
    $namarpl1 = Array("Alya", "Dwi", "Eben");

    echo "Nama lengkap : $namalengkap <br>";
    echo "umur : $umur <br>";
    echo "nilai : $nilai <br>";
    echo "Jomblo : $jomblo <br>";
    echo "<hr>";

    echo "Array 0 : $namarpl1[0] <br>";
    echo "Array 2 : $namarpl1[2] <br>";
    echo "<hr>";

    //aritmatika (+ - / * %)
    echo "Angka1: " . $angka1 = 10; echo "<br>";
    echo "Angka2: " . $angka2 = 5; echo "<hr>";

    echo "Tambah :" . $tambah = $angka1 + $angka2 . "<br>";
    echo "kurang :" . $kurang = $angka1 - $angka2 . "<br>";
    echo "bagi :" . $bagi = $angka1 / $angka2 . "<br>";
    echo "kali :" . $kali = $angka1 * $angka2 . "<br>";
    echo "sisa bagi :" . $sisabagi = $angka1 % $angka2 . "<br>";
    echo "<hr>";

    // operator perbandigan (=, >, <, !=, ==, ===)
    // Return TRUE(1), FALSE (NULL /KOSONG)
    $a = 10;
    $b = 5;

    echo "==:"; echo $a == $b; echo "<br>";
    echo ">:"; echo $a > $b; echo "<br>";
    echo "<:"; echo $a < $b; echo "<br>";
    echo "!=:" ;echo $a != $b; echo "<br>";
    echo "===:"; echo $a === $b; echo "<br>";
    echo "<hr>";

    //oprator logika (AND, OR, &&, ||)
    //IF ELSE

    $x = 10;
    $y = 20;

    if ($x == 10 AND $y == 20){echo "Terpenuhi 2 variabel <hr>"; }
    if ($x == 10 OR $y == 10){echo " salah satu varabel terpenuhi <hr>"; }
?>