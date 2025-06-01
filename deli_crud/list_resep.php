<?php
// connect to db
include("connect.php");

// Cek apakah ada data yang dikirim melalui search
$search = isset($_GET['search']) ? $_GET['search'] : '';

// Buat query untuk menampilkan data sesuai pencarian
$query = "SELECT * FROM resepmakanan WHERE nama_makanan LIKE '%$search%'";

// Jalankan query
$data = mysqli_query($conn, $query);

// Tampung hasil query ke dalam array
$foods = [];
while ($food = mysqli_fetch_assoc($data)) {
    $foods[] = $food;
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>List Resep</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <?php include("navbar.php") ?>
        <center>
            <div class="container mt-5">
                <h1>List Resep</h1>

                <!-- Form Search -->
                <form action="list_resep.php" method="GET" class="form-inline mb-3" style="display: flex; align-items: center; width: 50%;">
                    <input class="form-control me-2" type="search" name="search" placeholder="Cari Makanan......" aria-label="Search" value="<?=$search ?>">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>


                <table class="table align-middle table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Makanan</th>
                            <th scope="col">Deskripsi Makanan</th>
                            <th scope="col">Cara Membuat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($foods) == 0) : ?>
                            <tr>
                                <th colspan="4" class="text-center">TIDAK ADA DATA</th>
                            </tr>
                        <?php endif; ?>

                        <?php foreach ($foods as $food) : ?>
                            <tr>
                                <td><?= $food["id"] ?></td>
                                <td><?= $food["nama_makanan"] ?></td>
                                <td><?= $food["deskripsi_makanan"] ?></td>
                                <td><?= $food["cara_membuat"] ?></td>
                                <td>
                                    <a href="./form_detail_resep.php?id=<?= $food["id"] ?>" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </center>
    </body>

    </html>

