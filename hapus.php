<?php
    include 'koneksi.php';
    if(isset($_GET['nik'])) {
        $hapus = mysqli_query($connection,"DELETE FROM data_kk WHERE nik = '" .$_GET['nik']."'");
    }

?>