<?php
include("navbar.php");

// connect to db
include("connect.php");

// get id
$id = $_GET['id'];

// sql query
$query = "SELECT * FROM resepmakanan WHERE id = $id";

// execute query
$data = mysqli_query($conn, $query);

// buat array kosong penampung data
$foods = [];
// looping semua data dan masukan pada penampung
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
            <h1>Detail Resep</h1>
            <div class="col-md-4 p-3">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <!-- Tampilkan masing-masing data yang telah diambil dari database tadi -->
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="nama_makanan" id="nama_makanan" value="<?= $foods[0]["nama_makanan"] ?>" disabled>
                                <label for="nama_makanan">Nama Makanan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="brand_mobil" id="deskripsi_makanan" value="<?= $foods[0]["deskripsi_makanan"] ?>" placeholder="Tampilkan data deskripsi_makanan disini" disabled>
                                <label for="deskripsi_makanan">Deskripsi Makanan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" name="cara_membuat" id="cara_membuat" value="<?= $foods[0]["cara_membuat"] ?>" disabled>
                                <label for="cara_membuat">Cara Membuat</label>
                            </div>
                            <a name="update" id="update" href="form_update_resep.php?id=<?php echo $id ?>" class="btn btn-warning mb-3 mt-3 w-100">Edit</a>
                            <a name="delete" id="delete" href="delete.php?id=<?php echo $id ?>" class="btn btn-danger mb-3 mt-3 w-100">Delete</a>
                        </form>
                    </div>
                </div>
            </div>
            <center>
    </div>
</body>

</html>

