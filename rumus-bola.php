<form action="rumus-bola.php" method="POST">
    <h1> Rumus bola</h1>
    <p>jari-jari :</p>
    <input type="number" name="jarijari" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>"; 
        $jarijari = $_POST["jarijari"];
        $volume = 4/3 * 3.14 * $jarijari * $jarijari * $jarijari;
        $luas = 4 * 3.14 * $jarijari * $jarijari ;
        
        echo "jari-jari : $jarijari <br>";
        echo "volume : $volume <br>";
        echo "luas : $luas <br>";
    }
?>