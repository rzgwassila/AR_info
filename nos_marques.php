<?php include("navbar.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste de nos marques</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
      text-align: center;
    }

    h2 {
      font-size: 24px;
      font-weight: 600;
      margin-top: 50px; /* Ajout d'espace sous la navbar */
      color: #081f37;
    }

    .brands-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin-top: 20px;
    }

    .brand-card {
      width: 150px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .brand-card img {
      max-width: 100px;
      height: 100px;
      object-fit: contain;
      margin-bottom: 10px;
    }

    .brand-name {
      font-size: 14px;
      font-weight: bold;
      color: #333;
    }

    .product-count {
      font-size: 12px;
      color: #777;
      margin-top: 5px;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Liste de nos marques</h2>
  <div class="brands-grid">
    <!-- Brand Card Example -->
    <div class="brand-card">
      <img src="image/4.png" alt="Apple">
    </div>

    <div class="brand-card">
      <img src="image/2.png" alt="Acer">
    </div>

    <div class="brand-card">
      <img src="image/3.png" alt="Dell">
    </div>
    <div class="brand-card">
      <img src="image/4.png" alt="Apple">
    </div>

    <div class="brand-card">
      <img src="image/2.png" alt="Acer">
    </div>

    <div class="brand-card">
      <img src="image/3.png" alt="Dell">
    </div>
    <div class="brand-card">
      <img src="image/4.png" alt="Apple">
    </div>

    <div class="brand-card">
      <img src="image/2.png" alt="Acer">
    </div>

    <div class="brand-card">
      <img src="image/3.png" alt="Dell">
    </div>
    <div class="brand-card">
      <img src="image/4.png" alt="Apple">
    </div>

    <div class="brand-card">
      <img src="image/2.png" alt="Acer">
    </div>

    <div class="brand-card">
      <img src="image/3.png" alt="Dell">
    </div>
    <div class="brand-card">
      <img src="image/4.png" alt="Apple">
    </div>

    <div class="brand-card">
      <img src="image/2.png" alt="Acer">
    </div>

    <div class="brand-card">
      <img src="image/3.png" alt="Dell">
    </div>
    <div class="brand-card">
      <img src="image/4.png" alt="Apple">
    </div>

    <div class="brand-card">
      <img src="image/2.png" alt="Acer">
    </div>

    <div class="brand-card">
      <img src="image/3.png" alt="Dell">
    </div>

    <!-- Add more brand cards as needed -->
  </div>
</div>

</body>
</html>
