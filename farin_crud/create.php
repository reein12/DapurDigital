<?php
// (1) Sertakan koneksi database dari yang sudah kalian buat yaa
require "connect.php";

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
if (isset($_POST["create"])) {
    // a. Ambil data nama makanan
    $foodName = $_POST["nama_makanan"];
    // b. Ambil data deskripsi makanan
    $descriptionFood = $_POST["deskripsi_makanan"];
    // c. Ambil data cara membuat
    $howtoMake = $_POST["cara_membuat"];
    // (4) Kalau sudah, kita lanjut Query
    $query = "INSERT INTO resepmakanan (nama_makanan, deskripsi_makanan, cara_membuat) 
    VALUES ('$foodName', '$descriptionFood', '$howtoMake')";
    mysqli_query($conn, $query);

    // (5) Buatkan kondisi jika eksekusi query berhasil
    if (mysqli_affected_rows($conn) > 0) {
        header("Location: list_resep.php");
    } else {
        echo "
        <script>
            alert('Data failed');
            document.location.href = list_resep.php;
        </script>
        ";
        exit;
    }
}