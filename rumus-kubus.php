<form action="rumus-kubus.php" method="POST">
    <h1> Rumus kubus</h1>
    <p>sisi :</p>
    <input type="number" name="sisi" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>"; 
        $sisi = $_POST["sisi"];
        $volume = $sisi * $sisi * $sisi;
        $luas = 6 * $sisi * $sisi;
        
        echo "sisi : $sisi <br>";
        echo "volume : $volume <br>";
        echo "luas : $luas <br>";
    }
?>