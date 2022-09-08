<form action="rumus-jajargenjang.php" method="POST">
    <h1> Rumus jajar genjang</h1>
    <p>alas :</p>
    <input type="number" name="alas" placeholder="Ex. 5" />
    <p>tinggi :</p>
    <input type="number" name="tinggi" placeholder="Ex. 5" />
    <p>panjang:</p>
    <input type="number" name="panjang" placeholder="Ex. 5" />
    <p>lebar:</p>
    <input type="number" name="lebar" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>"; 
        $alas = $_POST["alas"];
        $tinggi = $_POST["tinggi"];
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $luas = $alas * $tinggi;
        $keliling = 2 * $panjang * $lebar;
        
        echo "alas : $alas <br>";
        echo "tinggi : $tinggi<br>";
        echo "panjang : $panjang <br>";
        echo "lebar : $lebar <br>";
        echo "Luas : $luas <br>";
        echo "keliling : $keliling <br>";
    }
?>