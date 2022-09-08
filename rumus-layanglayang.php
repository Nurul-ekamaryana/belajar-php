<form action="rumus-layanglayang.php" method="POST">
    <h1> Rumus layang layang</h1>
    <p>diagonal 1 :</p>
    <input type="number" name="diagonal1" placeholder="Ex. 5" />
    <p>diagonal 2 :</p>
    <input type="number" name="diagonal2" placeholder="Ex. 5" />
    <p>sisi atas:</p>
    <input type="number" name="sisiatas" placeholder="Ex. 5" />
    <p>sisi bawah:</p>
    <input type="number" name="sisibawah" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>"; 
        $diagonal1 = $_POST["diagonal1"];
        $diagonal2 = $_POST["diagonal2"];
        $sisiatas = $_POST["sisiatas"];
        $sisibawah = $_POST["sisibawah"];
        $luas = 1/2 * $diagonal1 * $diagonal2;
        $keliling = 2 * $sisiatas + $sisibawah;
        
        echo "diagonal 1 : $diagonal1 <br>";
        echo "diagonal 2 : $diagonal2 <br>";
        echo "sisi atas : $sisiatas <br>";
        echo "sisi bawah : $sisibawah <br>";
        echo "Luas : $luas <br>";
        echo "keliling : $keliling <br>";
    }
?>