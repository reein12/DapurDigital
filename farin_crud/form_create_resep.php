<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Resep</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>Tambah Resep</h1> 
            <div class="col-md-4 p-3">
                <div class="card">
                    <div class="card-body">
                        <form action="create.php" method="POST" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control w-100" name="nama_makanan" id="nama_makanan" required style="max-weidth: 600px;">
                                <label for="nama_makanan">Nama Makanan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control w-100" name="deskripsi_makanan" id="deskripsi_makanan" required style="max-weidth: 600px;">
                                <label for="deskripsi_makanan">Deskripsi Makanan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control w-100" name="cara_membuat" id="cara_membuat" rows="5" style="height: 200px; resize: vertical;" required style="max-weidth: 600px;"></textarea>
                                <label for="cara_membuat">Cara Membuat</label>
                            </div>
                            <button type="submit" name="create" id="create" class="btn btn-primary mb-3 mt-3 w-100">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <center>
</body>
</html>

