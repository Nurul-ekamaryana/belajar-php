<form action="rumus-balok.php" method="POST">
    <h1> Rumus balok</h1>
    <p>panjang alas :</p>
    <input type="number" name="alas" placeholder="Ex. 5" />
    <p>tinggi :</p>
    <input type="number" name="tinggi" placeholder="Ex. 5" />
    <p>lebar:</p>
    <input type="number" name="lebar" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>"; 
        $panjangalas = $_POST["alas"];
        $tinggi = $_POST["tinggi"];
        $lebar = $_POST["lebar"];
        $volume = $panjangalas * $lebar * $tinggi;
        $luas = 2 * $panjangalas * $lebar + $panjangalas * $tinggi + $lebar * $tinggi;
        
        echo "alas : $panjangalas <br>";
        echo "tinggi : $tinggi<br>";
        echo "lebar : $lebar <br>";
        echo "volume : $volume <br>";
        echo "luas : $luas <br>";
    }
?>