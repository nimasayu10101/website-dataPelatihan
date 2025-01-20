<!DOCTYPE html>
<html>
<head>
    <title>Pelatihan Seni Kreatif dan Panduan Perizinan Usaha Yang Mudah</title>
</head>
<body bgcolor="#F0F8FF">
    <div style="margin: 0 auto; width: 90%">
        <table align="center">
            <tr>
                <td align="center" bgcolor="#F0F8FF" width="100%">
                    <h2 align="center">Pelatihan Seni Kreatif dan Panduan Perizinan Usaha Yang Mudah</h2>
                </td>
            </tr>
        </table>
        <a href="input.php">Tambah</a>
        <table align="center" border="1" cellpadding="0" width="100%" bgcolor="#ADD8E6">
            <tr bgcolor="#4B91CC">
                <td align="center">No</td>
                <td align="center">Nik</td>
                <td align="center">Nama Lengkap</td>
                <td align="center">Jenis Kelamin</td>
                <td align="center">Agama</td>
                <td align="center">Alamat</td>
                <td align="center">Kelurahan</td>
                <td align="center">Kecamatan</td>
                <td align="center">Nama Usaha</td>
                <td align="center">Nomor Telepon</td>
                <td align="center">Nomor Rekening</td>
                <td align="center">Nama Bank</td>
                <td align="center">Aksi</td>
            </tr>
            <?php
            include 'koneksi.php';
            $no = 1;
            $tampil = mysqli_query($connection, "SELECT * FROM data_kk") ;
            if (mysqli_num_rows($tampil) > 0) {
            while ($hasil = mysqli_fetch_array($tampil)) {
                ?>
            <tr align="center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $hasil['nik'] ?></td>
                <td><?php echo $hasil['nama_lengkap'] ?></td>
                <td><?php echo $hasil['jenkel'] ?></td>
                <td><?php echo $hasil['agama'] ?></td>
                <td><?php echo $hasil['alamat'] ?></td>
                <td><?php echo $hasil['kelurahan']?></td>
                <td><?php echo $hasil['kecamatan']?></td>
                <td><?php echo $hasil['nama_usaha'] ?></td>
                <td><?php echo $hasil['no_hp'] ?></td>
                <td><?php echo $hasil['no_rek'] ?></td>
                <td><?php echo $hasil['nama_bank'] ?></td>
                <td>
                    <a href="edit.php?nik=<?php echo $hasil['nik'] ?>">Edit</a>
                    <a href="hapus.php?nik=<?php echo $hasil['nik'] ?>">Hapus</a>
                </td>
                </tr>
                <?php }}else { ?>
                     <tr>
                         <td colspan ="13" align ="center">Data Kosong</td>
                     </tr>
                <?php } ?>
                    </table>
                    <a href ="cetak.php" target="blank">Cetak</
    </div>
</body>
</html>