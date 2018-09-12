
<?php
$server     ="localhost";
$user       ="root";
$sandi      ="";
$database   ="toko";

// Koneksi dan memilih database di server 
$link	= mysqli_connect($server,$user,$sandi,$database); if(mysqli_connect_error())
{
echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
     }
?>