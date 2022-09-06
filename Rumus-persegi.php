<form action="rumus-persegi.php" method="POST">
    <h1> Rumus luas dan keliling persegi </h1>
     <p>sisi :</p>
     <input type="number" name="Sisi" placeholder="ex. 5" />
     <input type="submit" name="proses"  value="hitung luas dan keliling"/>

</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>" ;
        $sisi = $_POST["Sisi"];
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;

        echo "sisi : $sisi <br>";
        echo "luas persegi : $luas <br>";
        echo "keliling: $keliling <br>";

      }

?>