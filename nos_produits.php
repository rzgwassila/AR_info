
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique</title>
    <style>
   

body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    background-color: #f5f5f5;
}

.container {
    display: flex;
    max-width: 1200px;
    width: 100%;
    padding: 20px;
}

.filter-sidebar {
    width: 250px;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-right: 20px;
}

.filter-sidebar h2 {
    color: #4a4a4a;
    margin-bottom: 15px;
}

.filter-sidebar label {
    color: #666;
    font-size: 14px;
    margin-top: 10px;
    display: block;
}

.filter-sidebar input,
.filter-sidebar button {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.filter-sidebar button {
    background-color: #5a3baf;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    margin-top: 15px;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    flex-grow: 1;
}

.product-card {
    background-color: #fff;
    padding: 15px;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.product-card img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
}

.product-card h3 {
    font-size: 16px;
    color: #333;
    margin: 10px 0;
}

.product-card p {
    font-size: 18px;
    color: #5a3baf;
    font-weight: bold;
}

.product-card .old-price {
    text-decoration: line-through;
    color: #888;
}

.promotion {
    border: 2px solid #28a745;
    position: relative;
}

.promotion::before {
    content: "EN PROMOTION";
    color: #fff;
    background-color: #28a745;
    padding: 5px;
    font-size: 12px;
    position: absolute;
    top: 10px;
    right: 10px;
    border-radius: 5px;
}

    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar de filtre -->
        <aside class="filter-sidebar">
            <h2>Filtre</h2>
            <form>
                <label for="search">Recherche</label>
                <input type="text" id="search" name="search">

                <label for="min-price">Prix Min</label>
                <input type="number" id="min-price" name="min-price">

                <label for="max-price">Prix Max</label>
                <input type="number" id="max-price" name="max-price">

                <button type="submit">Appliquer le filtre</button>
            </form>
        </aside>

        <!-- Grille de produits -->
        <main class="product-grid">
            <!-- Produit 1 -->
            <div class="product-card">
                <img src="asus1.png" alt="ASUS D415DA-BV429T">
                <h3>ASUS D415DA-BV429T</h3>
                <p>78,000 Da</p>
            </div>

            <!-- Produit 2 -->
            <div class="product-card">
                <img src="asus2.png" alt="ASUS M509D">
                <h3>ASUS M509D M509da-br377Taa</h3>
                <p>79,900 Da</p>
            </div>

            <!-- Produit 3 -->
            <div class="product-card">
                <img src="logitech1.png" alt="LOGITECH RALLY PLUS">
                <h3>LOGITECH RALLY PLUS</h3>
                <p>684,000 Da</p>
            </div>

            <!-- Produit en promotion -->
            <div class="product-card promotion">
                <img src="logitech2.png" alt="LOGITECH GROUP HD ZOOM X10">
                <h3>LOGITECH GROUP HD ZOOM X10</h3>
                <p><span class="old-price">215,000 Da</span> 184,500 Da</p>
            </div>

            <!-- Ajouter d'autres produits comme nécessaire -->
        </main>
    </div>
</body>
</html>

</body>
</html>