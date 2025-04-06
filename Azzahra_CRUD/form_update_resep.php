<?php
include("navbar.php");

// connect to db
include("connect.php");

// get id
$id = $_GET['id'];

// sql query
$query = "SELECT * FROM resepmakanan WHERE id = $id";

// execute sql query
$data = mysqli_query($conn, $query);

// data storage
$food = [];

// loop all data from database
while ($food = mysqli_fetch_assoc($data)) {
    $foods[] = $food;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Resep</title>
</head>

<body>
    <div class="row">
        <center>
            <h1>Perbarui Detail Resep</h1>
            <div class="col-md-4 p-3">
                <div class="card">
                    <div class="card-body">
                        <form action="update.php" method="POST" enctype="multipart/form-data">
                            <!-- Tampilkan masing-masing data berdasarkan id -->
                            <input type="hidden" class="form-control" name="id" id="id" value="<?= $foods[0]["id"] ?>">
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="nama_makanan" id="nama_makanan" value="<?= $foods[0]["nama_makanan"] ?>" required>
                                <label for="nama_makanan">Nama Makanan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="deskripsi_makanan" id="deskripsi_makanan" value="<?= $foods[0]["deskripsi_makanan"] ?>" required>
                                <label for="deskripsi_makanan">Deskripsi Makanan</label>
                            </div>
                            <button type="submit" name="update" id="update" class="btn btn-primary mb-3 mt-3 w-100">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <center>
    </div>
</body>

</html>

