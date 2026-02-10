<?php
// mengkoneksikan aplikasi dengan database
$koneksi = mysqli_connect("localhost", "root", "", "akademik");

// cek koneksi
if(mysqli_connect_errno()){
    echo "koneksi databse gagal:" . mysqli_connect_error();
}
?>