<?php

include("koneksi.php");

 if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nim = $_POST['nim'];

    $sql = "INSERT INTO coba1 (nama, alamat, nim) VALUES ('$nama', '$alamat', '$nim')";
    $query =;

    if( mysqli_query($db, $sql)) {
        echo "berhasil";
    } else {
        echo "gagal";;
    }
}


?>
