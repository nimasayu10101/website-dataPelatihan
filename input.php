<!DOCTYPE html>
<html>
<head>
    <title>Halaman Input Data </title>
</head>
<body>
    
    <h2 style="padding: 1px 20px;">Input Data </h2>
    <form action="" method="POST">
    <table style="padding: 1px 20px;">
         <tr>
             <td>NIK</td>
             <td>:</td>
             <td><input type="text" name="nik" placeholder="nik"  required></td>
         </tr>
          <tr>
             <td>NAMA LENGKAP</td>
             <td>:</td>
             <td><input type="text" name="nama_lengkap" placeholder="nama_lengkap"  required></td>
         </tr>
          <tr>
             <td>JENIS KELAMIN</td>
            <td>:</td>
            <td><select name="jenkel">
                <option value="">--pilih--</option>
                <option  value="Laki-laki">Laki-laki</option>
                <option   value="Perempuan">Perempuan</option>
                </select>
            </td>
        </tr>
         <tr>
             <td>AGAMA</td>
             <td>:</td>
             <td><select name="agama">
                 <option value="">--pilih--</option>
                 <option value="Islam">Islam</option>
                 <option value="Kristen">Kristen</option>
         </tr>
          <tr>
              <td>ALAMAT</td>
              <td>:</td>
              <td><input type="text" name="alamat" placeholder="alamat" required></td>
         </tr>
         <tr>
              <td>KELURAHAN</td>
              <td>:</td>
              <td><input type="text" name="kelurahan" placeholder="kelurahan" required></td>
         </tr>
         <tr>
              <td>KECAMATAN</td>
              <td>:</td>
              <td><input type="text" name="kecamatan" placeholder="kecamatan" required></td>
         </tr>
          <tr>
              <td>NAMA USAHA</td>
              <td>:</td>
              <td><input type="text" name="nama_usaha" placeholder="nama_usaha" required></td>
         </tr>
          <tr>
              <td>NOMOR TELEPON</td>
              <td>:</td>
              <td><input type="text" name="no_hp" placeholder="no_hp" required></td>
         </tr>
          <tr>
              <td>NOMOR REKENING</td>
              <td>:</td>
              <td><input type="text" name="no_rek" placeholder="no_rek" required></td>
         </tr>
          <tr>
              <td>NAMA BANK</td>
              <td>:</td>
              <td><input type="text" name="nama_bank" placeholder="nama_bank" required></td>
         </tr>

          <tr>
             <td></td>
             <td></td>
             <td><input type="submit" name="simpan" value="simpan"></td>
         </tr>
    </table>
    </form>
    <?php
    include 'koneksi.php';
    if (isset($_POST["simpan"])){

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
     $input = "INSERT INTO data_kk values ('$nik', '$nama_lengkap', '$jenkel', '$agama', '$alamat','$kelurahan','$kecamatan', '$nama_usaha', '$no_hp', '$no_rek', '$nama_bank')"; 
     mysqli_query($connection, $input);
     header('location:index.php');
}
 ?>
</body>
</html>














</body>
</html>