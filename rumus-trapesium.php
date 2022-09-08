<form action="rumus-trapesium.php" method="POST">
    <h1> Rumus trapesium</h1>
    <p>sisi atas :</p>
    <input type="number" name="sisiatas" placeholder="Ex. 5" />
    <p>sisi bawah :</p>
    <input type="number" name="sisibawah" placeholder="Ex. 5" />
    <p>tinggi :</p>
    <input type="number" name="tinggi" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>"; 
        $sisiatas = $_POST["sisiatas"];
        $sisibawah = $_POST["sisibawah"];
        $tinggi = $_POST["tinggi"];
        $luas = 1/2 * $sisiatas + $sisibawah * $tinggi;
        $keliling = $sisiatas + $sisibawah + $tinggi + $tinggi ;
        
        echo "sisi atas : $sisiatas <br>";
        echo "sisi bawah : $sisibawah <br>";
        echo "sisi tinggi : $tinggi <br>";
        echo "Luas trapesium : $luas <br>";
        echo "keliling : $keliling <br>";
        
    }
?>