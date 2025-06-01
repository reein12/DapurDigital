<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Snack</title>
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

    .snack-title {
      cursor: pointer;
      color: #2e7d32;
      margin: 0;
    }

    .snack-title:hover {
      text-decoration: underline;
    }

    .snack-detail {
      display: none;
      margin-top: 10px;
      display: flex;
      gap: 16px;
    }

    .snack-detail img {
      width: 140px;
      height: 100px;
      object-fit: cover;
      border-radius: 8px;
    }

    .snack-text {
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
    <h1 class="title">Snack</h1>

    <?php
    $snacks = [
    
      [
        "title" => "Onion Ring",
        "author" => "Cici",
        "description" => "Onion ring merupkan snack yang praktis dibuat dan mudah.",
        "image" => "onionring.jpg"
      ],
 
      
    ];

    foreach ($snacks as $index => $snack) {
      echo '
      <div class="card">
        <h2 class="snack-title" onclick="toggleDetail(' . $index . ')">' . $snack["title"] . '</h2>
        <div class="snack-detail" id="detail-' . $index . '">
          <img src="' . $snack["image"] . '" alt="' . $snack["title"] . '">
          <div class="snack-text">
            <p class="author">By ' . $snack["author"] . '</p>
            <p class="desc">' . $snack["description"] . '</p>
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