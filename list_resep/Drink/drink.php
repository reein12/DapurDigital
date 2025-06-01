<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Drink</title>
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

    .drink-title {
      cursor: pointer;
      color: #2e7d32;
      margin: 0;
    }

    .drink-title:hover {
      text-decoration: underline;
    }

    .drink-detail {
      display: none;
      margin-top: 10px;
      display: flex;
      gap: 16px;
    }

    .drink-detail img {
      width: 140px;
      height: 100px;
      object-fit: cover;
      border-radius: 8px;
    }

    .drink-text {
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
    <h1 class="title">Drink</h1>

    <?php
    $drinks = [
    
      [
        "title" => "Thai Tea",
        "author" => "Gunawan",
        "description" => "Sawadhikap, Thai tea homemade yang praktis dan gampang banget",
        "image" => "thaitea.jpg"
      ],
 
      
    ];

    foreach ($drinks as $index => $drink) {
      echo '
      <div class="card">
        <h2 class="drink-title" onclick="toggleDetail(' . $index . ')">' . $drink["title"] . '</h2>
        <div class="drink-detail" id="detail-' . $index . '">
          <img src="' . $drink["image"] . '" alt="' . $drink["title"] . '">
          <div class="drink-text">
            <p class="author">By ' . $drink["author"] . '</p>
            <p class="desc">' . $drink["description"] . '</p>
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