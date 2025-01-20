<?php
include 'koneksi.php';
if (isset($_GET['nik'])) {
    $edit = mysqli_query($connection,"SELECT * FROM data_kk WHERE nik = '" .$_GET['nik']." ' ");
    $result = mysqli_fetch_array($edit);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Edit Data</title>
</head>
<body>

    <h2 style="padding: 1px 20px;">Input Data </h2>
    <form action="" method="POST"> 
        <table style="padding: 1px 20px;">
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><input type="text" name="nik" value="<?php echo $result['nik']; ?>"></td>
            </tr>
            <tr>
                <td>NAMA LENGKAP</td>
                <td>:</td>
                <td><input type="text" name="nama_lengkap" value="<?php echo $result['nama_lengkap']; ?>"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>:</td>
                <td>
                    <select name="jenkel">
                        <option value="<?php echo $result['jenkel']; ?>"><?php echo $result['jenkel']; ?></option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>AGAMA</td>
                <td>:</td>
                <td>
                    <select name="agama">
                        <option value="<?php echo $result['agama']; ?>"><?php echo $result['agama']; ?></option>
                        <option value="">--Pilih--</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>:</td>
                <td><input type="text" name="alamat" value="<?php echo $result['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>KELURAHAN</td>
                <td>:</td>
                <td><input type="text" name="kelurahan" value="<?php echo $result['kelurahan']; ?>"></td>
            </tr>
            <tr>
                <td>KECAMATAN</td>
                <td>:</td>
                <td><input type="text" name="kecamatan" value="<?php echo $result['kecamatan']; ?>"></td>
            </tr>
            <tr>
                <td>NAMA USAHA</td>
                <td>:</td>
                <td><input type="text" name="nama_usaha" value="<?php echo $result['nama_usaha']; ?>"></td>
            </tr>
            <tr>
                <td>NOMOR TELEPON</td>
                <td>:</td>
                <td><input type="text" name="no_hp" value="<?php echo $result['no_hp']; ?>"></td>
            </tr>
            <tr>
                <td>NOMOR REKENING</td>
                <td>:</td>
                <td><input type="text" name="no_rek" value="<?php echo $result['no_rek']; ?>"></td>
            </tr>
            <tr>
                <td>NAMA BANK</td>
                <td>:</td>
                <td><input type="text" name="nama_bank" value="<?php echo $result['nama_bank']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="edit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST["edit"])) {
        $nik = $_POST["nik"];
        $nama_lengkap = $_POST["nama_lengkap"];
        $jenkel = $_POST["jenkel"];
        $agama = $_POST["agama"];
        $alamat = $_POST["alamat"];
        $kelurahan = $_POST["kelurahan"];
        $kecamatan = $_POST["kecamatan"];
        $nama_usaha = $_POST["nama_usaha"];
        $no_hp = $_POST["no_hp"];
        $no_rek = $_POST["no_rek"];
        $nama_bank = $_POST["nama_bank"];

        $input= "UPDATE data_kk SET nama_lengkap='$nama_lengkap', jenkel='$jenkel', agama='$agama',alamat='$alamat', kelurahan='$kelurahan',kecamatan='$kecamatan',nama_usaha='$nama_usaha', no_hp='$no_hp', no_rek='$no_rek',nama_bank='$nama_bank' WHERE nik='$nik'";

        if (mysqli_query($connection, $input)) {
            header('Location: index.php');
            exit;
        } else {
            echo "Error updating record: " . mysqli_error($connection);
        }
    }
    ?>
</body>
</html>