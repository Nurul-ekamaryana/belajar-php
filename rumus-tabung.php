<form action="rumus-tabung.php" method="POST">
    <h1> Rumus tabung</h1>
    <p>jari -jari :</p>
    <input type="number" name="jarijari" placeholder="Ex. 5" />
    <p>tinggi :</p>
    <input type="number" name="tinggi" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>"; 
        $jarijari = $_POST["jarijari"];
        $tinggi = $_POST["tinggi"];
        $volume = 3.14 * $jarijari * $jarijari * $tinggi;
        $luas = 2 * 3.14 * $jarijari *( $jarijari + $tinggi);
        
        echo "jari-jari : $jarijari <br>";
        echo "tinggi : $tinggi <br>";
        echo "volume : $volume <br>";
        echo "luas : $luas <br>";
    }
?>