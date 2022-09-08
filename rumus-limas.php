<form action="rumus-limas.php" method="POST">
    <h1> Rumus limas</h1>
    <p>alas :</p>
    <input type="number" name="alas" placeholder="Ex. 5" />
    <p>tinggi :</p>
    <input type="number" name="tinggi" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>"; 
        $alas = $_POST["alas"];
        $tinggi = $_POST["tinggi"];
        $volume = 1/3 * $alas * $tinggi;
        $luas = $alas + (3 * $tinggi);
        
        echo "alas : $alas <br>";
        echo "tinggi : $tinggi <br>";
        echo "volume : $volume <br>";
        echo "luas : $luas <br>";
    }
?>