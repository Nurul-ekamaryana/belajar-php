<form action="rumus-segitiga.php" method="POST">
    <h1> Rumus Luas dan Keliling Segitiga </h1>
    <p>Alas :</p>
    <input type="number" name="alas" placeholder="Ex. 5" />
    <p>Tinggi :</p>
    <input type="number" name="tinggi" placeholder="Ex. 5" />
    <p>Sisi :</p>
    <input type="number" name="sisi" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung Luas dan Keliling" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $alas = $_POST["alas"];
        $tinggi = $_POST["tinggi"];
        $sisi = $_POST["sisi"];
        $b = 1/2;
        $luas = $b * $alas * $tinggi;
        $keliling = $sisi + $sisi + $sisi;

        echo "Alas : $alas <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Sisi : $sisi <br>";
        echo "Luas Segitiga : $luas <br>";
        echo "Keliling Segitiga : $keliling <br>";
    }
?>