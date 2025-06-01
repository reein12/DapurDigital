<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dapur Digital - Nasi Goreng</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <!-- Header -->
  <header class="header">
    <div class="logo">Dapur Digital</div>
    <nav class="nav">
      <a href="#">Home</a>
      <a href="#">Tambah Resep</a>
      <a href="#">Fitur 2</a>
      <a href="#">Fitur 3</a>
    </nav>
    <input type="text" placeholder="Search" class="search-box" />
  </header>

  <!-- Konten Utama -->
  <main class="container">
    <section class="intro">
      <div class="info-resep">
        <!-- Kiri: Deskripsi -->
        <div class="info-kiri">
          <p class="penulis">Recipe by Farin Armeda</p>
          <h1>Nasi Goreng</h1>
          <p class="deskripsi">
            Nasi goreng adalah salah satu kuliner khas Indonesia yang terkenal dengan cita rasa gurih dan aroma khasnya...
          </p>
      
          <div class="waktu">
            <div><strong>Prep</strong><br>10 min</div>
            <div><strong>Bake</strong><br>15–20 min</div>
            <div><strong>Total</strong><br>30 min</div>
          </div>
      
          <button class="save-btn">📂 Save Recipe</button>
        </div>
      
        <!-- Kanan: Gambar -->
        <div class="info-kanan">
          <img src="img/nasi-goreng.jpg" alt="Nasi Goreng">
        </div>
      </div>
      
    </section>

    <div class="bagi-dua">
      <!-- Kiri: Bahan dan Alat -->
      <section class="panel">
        <h2>Bahan dan Alat</h2>
        <h3>Bahan:</h3>
        <ul>
          <li>1 mangkuk kecil nasi putih</li>
          <li>1 siung bawang putih</li>
          <li>1 butir telur</li>
          <li>1 sdm kecap manis</li>
          <li>Garam, merica, minyak goreng</li>
        </ul>
        <h3>Alat:</h3>
        <ul>
          <li>Wajan</li>
          <li>Spatula</li>
          <li>Kompor</li>
        </ul>
      </section>
    
      <!-- Kanan: Langkah Memasak -->
      <section class="langkah">
        <h2>Langkah-langkah memasak</h2>
        <ol>
          <li>Siapkan semua bahan dan alat.</li>
          <li>Tumis bawang putih hingga harum.</li>
          <li>Masukkan telur, orak-arik hingga matang.</li>
          <li>Masukkan nasi, kecap, dan bumbu.</li>
          <li>Aduk rata dan masak hingga matang.</li>
          <li>Sajikan dengan pelengkap sesuai selera.</li>
        </ol>
      </section>
    </div>
    

    <!-- Komentar -->
    <section class="komentar">
      <h2>Comments</h2>
      <form id="commentForm">
        <textarea placeholder="Add comment..." id="commentInput"></textarea>
        <button type="submit">Submit</button>
      </form>
      <div id="commentList">
        <div class="comment">
          <strong>Foren.ezd</strong>
          <p>Wah nasi gorengnya enak banget, simpel bikinnya. Bakal recook ah! 😋</p>
        </div>
      </div>
    </section>
  </main>

  <script>
    const form = document.getElementById('commentForm');
    const input = document.getElementById('commentInput');
    const list = document.getElementById('commentList');

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      if (input.value.trim() !== '') {
        const div = document.createElement('div');
        div.className = 'comment';
        div.innerHTML = <strong>Anonim</strong><p>${input.value}</p>;
        list.appendChild(div);
        input.value = '';
      }
    });
  </script>
</body>
</html>