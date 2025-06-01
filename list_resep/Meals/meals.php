<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Meals</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 40px auto;
      padding: 20px;
      background-color: #fff;
      border: 4px solid #3B82F6;
      border-radius: 16px;
    }

    .title {
      text-align: center;
      color: #2e7d32;
      font-size: 28px;
      margin-bottom: 30px;
    }

    .card {
      background-color: #ffffff;
      border-radius: 12px;
      padding: 16px;
      margin-bottom: 24px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .meal-title {
      cursor: pointer;
      color: #2e7d32;
      margin: 0;
    }

    .meal-title:hover {
      text-decoration: underline;
    }

    .meal-detail {
      display: none;
      margin-top: 10px;
      display: flex;
      gap: 16px;
    }

    .meal-detail img {
      width: 140px;
      height: 100px;
      object-fit: cover;
      border-radius: 8px;
    }

    .meal-text {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .author {
      font-weight: bold;
      color: #555;
      margin: 0 0 8px 0;
    }

    .desc {
      font-size: 14px;
      color: #333;
      margin: 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="title">Meals</h1>

    <?php
    $meals = [
      [
        "title" => "Nasi Goreng Jawa",
        "author" => "Zahra",
        "description" => "Nasi goreng Jawa merupakan makanan khas nusantara yang sangat populer hingga ke mancanegara. Sesuai namanya, makanan olahan nasi ini berasal dari daerah Jawa, tepatnya Jawa Tengah dan Jawa Timur.",
        "image" => "nasgor_jawa.jpeg"
      ],
      [
        "title" => "Ayam Taliwang",
        "author" => "Mahmud",
        "description" => "Ayam Taliwang adalah makanan khas yang berasal dari Taliwang, Sumbawa Barat, Nusa Tenggara Barat. Makanan ini berbahan dasar daging ayam. Daging ayam yang disajikan berasal dari ayam kampung muda yang dibakar kemudian dibumbui dengan semacam saus yang bahannya antara lain cabai merah kering, bawang merah, bawang putih, tomat, terasi goreng, kencur, gula merah, dan garam. Makanan ini biasanya disajikan bersama makanan khas Lombok yang lain, misalnya plecing kangkung.",
        "image" => "AyamTaliwang.jpg"
      ],
  
      
    ];

    foreach ($meals as $index => $meal) {
      echo '
      <div class="card">
        <h2 class="meal-title" onclick="toggleDetail(' . $index . ')">' . $meal["title"] . '</h2>
        <div class="meal-detail" id="detail-' . $index . '">
          <img src="' . $meal["image"] . '" alt="' . $meal["title"] . '">
          <div class="meal-text">
            <p class="author">By ' . $meal["author"] . '</p>
            <p class="desc">' . $meal["description"] . '</p>
          </div>
        </div>
      </div>';
    }
    ?>
  </div>

  <script>
    function toggleDetail(index) {
      const detail = document.getElementById('detail-' + index);
      detail.style.display = (detail.style.display === 'flex') ? 'none' : 'flex';
    }
  </script>
</body>
</html>
