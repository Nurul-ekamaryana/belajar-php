<?php 
     $mysqli = new mysqli("localhost","root","","siswa_rpl1");
     if ($mysqli-> connect_errno) {
        echo "failed to connect to Mysql: " . $mysqli -> connect_errnor;
        exit();
     }
?>