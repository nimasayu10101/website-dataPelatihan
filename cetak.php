<!DOCTYPE html>
<html>
<head>
    <title>CETAK DATA </title>
</head>
<body bgcolor="#F0F8FF">
    <div style="margin: 0 auto; width: 90%">
        <table align="center">
        <tr>
            <td align="center" bgcolor="#F0F8FF" width="100%">
            <h2 align="center">KARTU TANDA PENDUDUK</h2>
        </tr>
        </table>
        <tr>
        <table align="center" border="1" cellpadding="0" width="100%" bgcolor="#ADD8E6">
            <tr bgcolor="#48D1CC">
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
            </tr>
            <?php
            include'koneksi.php';
            $no = 1;
            $tampil = mysqli_query($connection,"SELECT * FROM data_kk");
            if (mysqli_num_rows($tampil)>0) {
            while ($hasil = mysqli_fetch_array($tampil)) {
            ?>
        <tr align="center">
        <td><?php echo $no++ ?></td>
        <td><?php echo $hasil['nik'] ?></td>
        <td><?php echo $hasil['nama_lengkap'] ?></td>
        <td><?php echo $hasil['jenkel'] ?></td>
        <td><?php echo $hasil['agama'] ?></td>
        <td><?php echo $hasil['alamat'] ?></td>
        <td><?php echo $hasil['kelurahan'] ?></td>
        <td><?php echo $hasil['kecamatan'] ?></td>
        <td><?php echo $hasil['nama_usaha'] ?></td>
        <td><?php echo $hasil['no_hp'] ?></td>
        <td><?php echo $hasil['no_rek'] ?></td>
        <td><?php echo $hasil['nama_bank'] ?></td>
        </tr>
        <?php }}else { ?>
            <tr>
                <td colspan="12" align="center">Data Kosong</td>
            </tr>
        <?php } 
        ?>
        </table>
        <script>
            window.print();
        </script>
    </div>
</body>
</html>