<?php
      include ('./input-config.php');
      if( $_SESSION["login"] !=TRUE) {
            header('location:login.php');
      }
      if( $_SESSION["role"] !="ADMIN") {
            echo "
                  <script>
                        alert('Akses tidak diberikan, kamu bukan admin');
                        window.location='input-datadiri.php';
                  </script>
            ";
      }

      if ( isset($_GET["nis"]) && $_SESSION["role"] =="ADMIN" ){
            $nis = $_GET["nis"];

            $query = "
                  DELETE FROM datanilai
                  WHERE nis = '$nis';
            ";
            
            $delete = mysqli_query($mysqli, $query);

            if($delete){
                  echo "
                        <script>
                        alert('Data berhasil dihapus');
                        window.location='input-datadiri.php';
                        </script>
                  ";
            }else{
                  echo "
                        <script>
                        alert('Data gagal');
                        window.location='input-datadiri.php';
                        </script>
                  ";
            }
      }
?>