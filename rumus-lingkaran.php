<form action="rumus-lingkaran.php" method="POST">
    <h1> Rumus lingkaran</h1>
    <p>jari-jari :</p>
    <input type="number" name="jarijari" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung lingkaran" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $jarijari = $_POST["jarijari"];
        $luas = 3.14 * $jarijari * $jarijari;
        $keliling = 2 * 3.14 * $jarijari;
        
        echo "jari-jari : $jarijari <br>";
        echo "Luas lingkaran : $luas <br>";
        echo "keliling : $keliling <br>";
        
    }
?>