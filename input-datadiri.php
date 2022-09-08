<form action="input-siswa.php" method="POST">
    <label for="nis">Nomor induk siswa :</label>
    <input type="number" name="nis" placeholder="Ex. 12001142"/><br>

    <label for="name">Nama lengkap :</label>
    <input type="text" name="name" placeholder="Ex. Sehun oh"/><br>

    <label for="Tanggal_lahir">Tanggal lahir :</label>
    <input type="date" name="Tanggal_lahir" /><br>

    <label for="nilai">Nilai :</label>
    <input type="number" name="nilai" placeholder="Ex. 80.56"/><br>

    <input type="submit" name="simpan" value="simpan data" />
   
</form>

<?php
       include('./input-config.php');
       echo "<hr>";
       //menampilkan data diri databases
       $no = 1;
       $tabledata = "";
       $data = mysqli_query($mysqli," SELECT * FROM datadiri");
       while($row = mysqli_fetch_array($data)){
        $tabledata .= "
        <tr> 
             <td>".$row["nis"]."</td>
             <td>".$row["namalengkap"]."</td>
             <td>".$row["tanggal_lahir"]."</td>
             <td>".$row["nilai"]."</td>
        </tr>
        ";
        $no++;
       }

       echo "
       <table callpadding=5 border=1 cellspacing=0>
          <tr>
             <th>NIS</th>
             <th>Nama lengkap</th>
             <th>tanggal lahir</th>
             <th>Nilai</th>
          </tr>
          $tabledata
       </table>
        ";
?>