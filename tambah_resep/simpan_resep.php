<?php
$koneksi = new mysqli("localhost", "root", "", "db_dapur_digital");

// Ambil data dari form
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$alat_bahan = $_POST['alat_bahan'];
$langkah_memasak = $_POST['langkah_memasak'];
$gambar = $_POST['gambar'];

// Gabungkan jadi satu string untuk disimpan ke database
$detail = "Alat dan Bahan:\n" . $alat_bahan . "\n\nLangkah-langkah Memasak:\n" . $langkah_memasak;

// Upload gambar
$namaFile = $_FILES['gambar']['name'];
$lokasiTmp = $_FILES['gambar']['tmp_name'];
$folderTujuan = "uploads/";

if (!file_exists($folderTujuan)) {
    mkdir($folderTujuan, 0777, true);
}

$path = $folderTujuan . basename($namaFile);

if (move_uploaded_file($lokasiTmp, $path)) {
    $sql = "INSERT INTO tambah_resep (judul, penulis, kategori, deskripsi, alat_bahan, langkah_memasak, gambar) 
            VALUES ('$judul', '$penulis', '$kategori', '$deskripsi', '$detail', '$namaFile')";

    if ($koneksi->query($sql)) {
        header("Location: tampil_resep.php?id=" . $koneksi->insert_id);
    } else {
        echo "Gagal menyimpan resep: " . $koneksi->error;
    }
} else {
    echo "Gagal upload gambar.";
}
?>
