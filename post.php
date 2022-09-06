<form action="post.php" method="POST">
    <input type="text" name="namalengkap" placeholder="Ex. indra El"/><br>
    <input type="text" name="kelas" placeholder="Ex. 11 RPL1"/><br>
    <input type="text" name="nis" placeholder="Ex.123"/><br>

    <input type="submit" name="simpan" value="Simpan Data" />
</form>

<?php
     if( isset($_POST["simpan"]) ){
        echo "<hr>";
        $namalengkap = $_POST["namalengkap"];
        $kelas = $_POST["kelas"];
        $nis = $_POST["nis"];

        echo "nama lengkap  : " . $namalengkap . "<br>";
        echo "kelas  : " . $kelas . "<br>";
        echo "nis  : " . $nis;
     }


?>