<form action="rumus-persegi-panjang.php" method="POST">
    <h1> Rumus Luas dan Keliling Persegi Panjang </h1>
    <p>Panjang :</p>
    <input type="number" name="Panjang" placeholder="Ex. 5" />
    <p>Lebar :</p>
    <input type="number" name="Lebar" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung Luas dan Keliling" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $Panjang = $_POST["Panjang"];
        $Lebar = $_POST["Lebar"];
        $luas = $Panjang * $Lebar;
        $keliling = 2 * ($Panjang + $Lebar);

        echo "Panjang : $Panjang <br>";
        echo "Lebar : $Lebar <br>";
        echo "Luas Persegi Panjang : $luas <br>";
        echo "Keliling Persegi Panjang : $keliling <br>";
    }
?>