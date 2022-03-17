<?php 
// mengaktifkan session
session_start();

//menghapus semua session
session_destroy();

//mengalihkan halaman kembali ke halamn  login sambil mengirim pesan logout melalui url
header("location:../index.php?pesan=logout");
 ?>