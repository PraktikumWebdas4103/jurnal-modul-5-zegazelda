<?php
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$nim = $_POST['nim'];
	$nama = $_POST['nama']; 
}


include("koneksi.php");

 if(isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nim = $_POST['nim'];

    $sql = "INSERT INTO coba (nama, alamat, nim) VALUE ('$nama', '$alamat', '$nim')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: ');
    } else {
        header('Location: ');
    }


} else {
    die("Akses dilarang...");
}


?>
