<form action="rumus-belahketupat.php" method="POST">
    <h1> Rumus belah ketupat luas dan keliling</h1>
    <p>diagonal 1 :</p>
    <input type="number" name="diagonal1" placeholder="Ex. 5" />
    <p>diagonal 2 :</p>
    <input type="number" name="diagonal2" placeholder="Ex. 5" />
    <p>sisi :</p>
    <input type="number" name="sisi" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>"; 
        $diagonal1 = $_POST["diagonal1"];
        $diagonal2 = $_POST["diagonal2"];
        $sisi = $_POST["sisi"];
        $luas = 1/2 * $diagonal1 * $diagonal2;
        $keliling = 4 * $sisi;
        
        echo "diagonal 1 : $diagonal1 <br>";
        echo "diagonal 2 : $diagonal2 <br>";
        echo "sisi : $sisi <br>";
        echo "Luas : $luas <br>";
        echo "keliling : $keliling <br>";
    }
?>