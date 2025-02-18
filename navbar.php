<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Navbar</title>
    <title>AR informatique</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="image/logo.png">
</head>
<body>
    <style>
     * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}   
.leftside{
    display: flex;
    align-items: center;
    margin-right: 8px;
    
}
.titre {
    display: flex;
    flex-direction: column;
    
    align-items: center; /* Center the title items */
    text-align: center; /* Center text */
}

img{
    width: 50px;
    height: 50px;
    margin-right: 8px;
}

.leftside p.first {
    font-size: 30px;
   
    margin: 0;
    color: #fff;
}

.leftside p.second {
    font-size: 14px;
    color: #ccc;
    margin: 0;
}
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    font-family: Arial, sans-serif;
}

.navbar {
    background-color:#081f37;
    color: white;
    
    
}

.navbar-top {
    display: flex;
    align-items: center;
    padding-left:  50px;
    padding-right: 50px;
    padding-top: 20px;
    
}


.search-bar {
    display: flex;
    align-items: center;
    flex: 1;
    max-width: 600px;
}

.search-bar select,
.search-bar input {
    padding: 8px;
    border: none;
    outline: none;
}

.search-bar select {
    background-color: #ddd;
    color: #333;
}

.search-bar input {
    flex: 1;
    padding: 8px;
    border: 1px solid #ccc;
}

.search-bar .search-button {
    background-color:  #ddd;
    color:#333;
    border: none;
    padding: 9px;
    cursor: pointer;
}

.nav-icons a {
    color: white;
    margin-left: 20px;
    text-decoration: none;
    display: flex;
    align-items: center;
    width: 30px;
}

.navbar-bottom {
    display: flex;
    justify-content: space-around;
    background-color: black;
    padding: 10px 20px;
    margin:0px 20px;
    position: relative;
    top:20px;
    border-radius: 3px;
    
}

.navbar-bottom a {
    color: white;
    text-decoration: none;
    padding: 5px 10px;
    
    
}

.navbar-bottom .promos {
    background-color: red;
    padding: 5px 10px;
    border-radius: 3px;
}

.navbar-bottom a:hover {
    background-color: #555;
    border-radius: 5px;
    
    
}
.navbar-top {
    display: flex;
    align-items: center;
    padding: 0px px;
    background-color: #081f37;
    justify-content: space-between; /* Space out left, center, and right */
}

.leftside {
    display: flex;
    align-items: center;
    margin-right: 8px;
}

.rightside {
    display: flex;
    gap: 20px;
    color: #fff;
    align-items: center;
}
.rightside a{
    text-decoration: none;
    color: white;
}
.item {
    display: flex;
    flex-direction: column;
    align-items: center;
    font-size: 0.9em; /* Adjust size as needed */
}

.item i {
    font-size: 30px;
    margin-bottom: 2px;
    color: #fff; /* Match icon color with navbar */
    margin-top: 4px;
    cursor: pointer;
}

.search-bar {
    display: flex;
    align-items: center;
    flex: 1;
    max-width: 600px;
    margin: 0 20px; /* Add margin for spacing if needed */
}



    </style>
    <header class="navbar" style="background-color: #070f4e;">
        
        <div class="navbar-top" style="background-color: #070f4e;">
        <div class="leftside" style="background-color: #070f4e;">
            <div class="titre">
                <p class="first">AR</p>
                <p class="second">Informatique et Hight-Tech</p>
            </div>
            
        </div>
            <div class="search-bar">
                <select>
                    <option>Par univers</option>
                    <option>Option 1</option>
                    <option>Option 2</option>
                </select>
                <input type="text" placeholder="Chercher un produit, une marque, une catégorie..." />
                <button class="search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            
            <div class="rightside">
            
            <div class="item">
               <a href="accueil.php"><i class="fa-solid fa-house"></i></a> 
                <a href="accueil.php">Accueil</a>
            </div>
            <div class="item">
               <a href="compte.php"><i class="fas fa-user"></i></a> 
                <a href="compte.php">Compte</a>
            </div>
            <div class="item">
                <a href=""><i class="fas fa-shopping-cart"></i></a>
                <a href="">Panier</a>
            </div>
            <div class="item">
                <a href="contact.php"><i class="fa-solid fa-message"></i></a>
                <a href="contact.php">Contact</a>
            </div>
        </div>
        </div>
        <div class="navbar-bottom" style="border-radius: 10px;">
            <a href="nos_produits.php">Nos Produits</a>
            <a href="nos_marques.php">Nos Marques</a>
            <a href="#">Configurateur PC</a>
            <a href="#">Gaming</a>
            <a href="#">Guides</a>
            <a href="#">Aide</a>
            <a href="#" class="promos">Promos & Bons Plans</a>
        </div>
    </header>
</body>
</html>
