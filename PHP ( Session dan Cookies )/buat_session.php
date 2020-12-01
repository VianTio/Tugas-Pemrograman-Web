<?php
session_start();
$nama = "BUDIANTO";
$_SESSION["namauser"] = $nama;
echo "<p><a href='lihat_session.php'>Lihat</a>";
?>