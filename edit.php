<!-- update.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $fakultas = $_POST['fakultas'];
    $alamat = $_POST['alamat'];

    // Periksa apakah file foto baru diupload
    if (!empty($_FILES['foto']['name'])) {
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        
        $uploadDirectory = 'gambar/'; // Tentukan direktori upload Anda

        // Periksa apakah file berhasil diupload
        if (move_uploaded_file($tmp, $uploadDirectory . $foto)) {
            echo 'File berhasil diupload.';
            // Sekarang Anda dapat menyimpan nama file atau pathnya di database atau melakukan operasi lainnya
        } else {
            echo 'Gagal mengupload file.Error: ' . $_FILES['foto']['error'];
        } 

        $foto_path = $uploadDirectory . $foto; // Path lengkap ke file foto baru
    } else {
        // Jika foto tidak diubah, gunakan foto yang sudah ada di database
        $foto_path = $_POST['existing_foto'];
    }

    $query = "UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan', fakultas='$fakultas', alamat='$alamat', foto='$foto_path' WHERE id=$id";
    $link->query($query);

    header('Location: dashboard.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $link->query("SELECT * FROM mahasiswa WHERE id=$id");
    $mahasiswa = $result->fetch_assoc();
}
?>

<form method="POST" action="" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $mahasiswa['id']; ?>">
    
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" value="<?php echo $mahasiswa['nama']; ?>" required>

    <label for="nim">NIM:</label>
    <input type="text" id="nim" name="nim" value="<?php echo $mahasiswa['nim']; ?>" required>

    <label for="jurusan">Jurusan:</label>
    <input type="text" id="jurusan" name="jurusan" value="<?php echo $mahasiswa['jurusan']; ?>" required>

    <label for="fakultas">Fakultas:</label>
    <input type="text" id="fakultas" name="fakultas" value="<?php echo $mahasiswa['fakultas']; ?>" required>

    <label for="alamat">Alamat:</label>
    <input type="text" id="alamat" name="alamat" value="<?php echo $mahasiswa['alamat']; ?>" required>

    <label for="foto">Foto</label>
    <input type="file" name="foto" id="foto">
    <input type="hidden" name="existing_foto" value="<?php echo $mahasiswa['foto']; ?>">

    <button type="submit">Update Mahasiswa</button>
</form>

</body>
</html>
