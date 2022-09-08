<form action="input-siswa.php" method="POST">
    <label for="nis">Nomor induk siswa :</label>
    <input type="number" name="nis" placeholder="Ex. 12001142"/><br>

    <label for="name">Nama lengkap :</label>
    <input type="text" name="name" placeholder="Ex. Sehun oh"/><br>

    <label for="jk">jenis kelamin :</label>
    <input type="radio" name="jk" value="L"/>Laki-Laki
    <input type="radio" name="jk" value="p"/>Perempuan<br>

    <label for="Kelas">kelas</label>
    <select name="Kelas">
        <option>10 RPL 1</option>
        <option>10 RPL 2</option>
        <option>11 RPL 1</option>
        <option>11 RPL 2</option>
        <option>12 RPL 1</option>
        <option>12 RPL 2</option>
</select><br>
<label for="Tanggal_lahir">Tanggal lahir :</label>
<input type="date" name="Tanggal_lahir" /><br>

<label for="alamat">alamat :</label>
<textarea name="alamat" placeholder="Ex.JL.planet Exo"/></textarea><br>

<label for="nilai">Nilai :</label>
<input type="numer" name="nilai" placeholder="Ex. 80.56"/><br>

<input type="submit" name="simpan" value="simpan data" />
<input type="reset" name="reset" value="reset input" />

</form>

<?php
      if ( isset($_POST["simpan"])) {
        echo"<hr>";

        //Deklarasi variabel
        $nis = $_POST["nis"];
        $namalengkap = $_POST["name"];
        $jeniskelamin = $_POST["jk"];
        $kelas = $_POST["Kelas"];
        $tanggalahir = $_POST["Tanggal_lahir"];
        $alamat = $_POST["alamat"];
        $nilai = $_POST["nilai"];

        //tampil data variabel
        echo "
        Hasil inputan sebagi berikut: <br>
        Nomor induk siswa : $nis <br>
        Nama lengkap : $namalengkap <br>
        jenis kelamin : $jeniskelamin <br>
        kelas : $kelas <br>
        tanggal lahir : $tanggalahir <br>
        alamat : $alamat <br>
        nilai : $nilai <br>";
      }