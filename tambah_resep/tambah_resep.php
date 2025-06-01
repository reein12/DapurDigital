<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Resep</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
  <h2>Tambah Resep</h2>
  <form action="simpan_resep.php" method="POST" enctype="multipart/form-data">

    <label>Judul Resep:</label>
    <input type="text" name="judul" required>

    <div class="form-row">
      <div>
        <label>Nama Penulis:</label>
        <input type="text" name="penulis" required>
      </div>
      <div>
        <label>Kategori:</label>
        <select name="kategori" required>
          <option value="">Pilih Kategori</option>
          <option value="Meals">Meals</option>
          <option value="Snack">Snack</option>
          <option value="Dessert">Dessert</option>
          <option value="Drink">Drink</option>
        </select>
      </div>
    </div>

    <label>Deskripsi Resep:</label>
    <input type="text" name="deskripsi" required>

    <label>Detail Resep:</label>
    <div class="form-row">
      <div>
        <label>Alat dan Bahan:</label>
        <textarea name="alat_bahan" rows="5" required></textarea>
      </div>
      <div>
        <label>Langkah-langkah Memasak:</label>
        <textarea name="langkah_memasak" rows="5" required></textarea>
      </div>
    </div>

    <label>Upload Gambar Resep:</label>
    <input type="file" name="gambar" accept="image/*" required>

    <button type="submit">Tambahkan</button>
  </form>
</div>

</body>
</html>
