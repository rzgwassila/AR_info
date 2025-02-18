<?php include("navbar.php")?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - AR Informatique</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="image/materiel.png">
</head>
<body>
    <!-- Navbar ici si besoin -->
<style>
    /* Styles de base */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

body {
    background-color: #f5f5f5;
    color: #333;
}

/* En-tête de la page de contact */
.contact-header {
    text-align: center;
    background-color: #081f37;
    color: white;
    padding: 30px;
}

.contact-header h1 {
    font-size: 2.5em;
    margin-bottom: 10px;
}

.contact-header p {
    font-size: 1.2em;
}

/* Conteneur principal de la page */
.contact-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 40px 20px;
}

/* Section d'informations de contact */
.contact-info {
    flex: 1;
    max-width: 400px;
    margin: 20px;
}

.contact-info h2 {
    font-size: 1.8em;
    margin-bottom: 15px;
}

.contact-info p {
    font-size: 1em;
    margin-bottom: 10px;
}

.social-media {
    margin-top: 20px;
}

.social-media h3 {
    margin-bottom: 10px;
}

.social-media a {
    display: inline-block;
    color: #005689;
    text-decoration: none;
    font-size: 1em;
    margin-right: 10px;
}

.social-media a i {
    margin-right: 5px;
}

/* Section du formulaire de contact */
.contact-form {
    flex: 1;
    max-width: 400px;
    margin: 20px;
}

.contact-form h2 {
    font-size: 1.8em;
    margin-bottom: 15px;
}

.contact-form label {
    display: block;
    font-size: 1em;
    margin-bottom: 5px;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.contact-form .submit-button {
    background-color: #081f37;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
}

.contact-form .submit-button:hover {
    background-color: #005689;
}

.map-container {
    margin-top: 20px;
    border-radius: 5px;
    overflow: hidden;
    border: 1px solid #005689 ;
}


</style>
 
    <div class="contact-container">
        <!-- Informations de contact -->
        <section class="contact-info">
            <h2>Nos coordonnées</h2>
            <p><strong>Adresse :</strong> AADL 3746 Douera Alger, Algerie</p>
            <p><strong>Téléphone :</strong> +33 1 23 45 67 89</p>
            <p><strong>Email :</strong> contact@ar-informatique.com</p>

            <div class="social-media">
                <h3>Suivez-nous</h3>
                <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            </div>
                         <!-- Carte GPS -->
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3199.510312529216!2d2.940715274492299!3d36.68627327411565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128faf817e465251%3A0xe34e2dbdaf3ae3e0!2sAADL%203746%20Douera!5e0!3m2!1sfr!2sdz!4v1730650200976!5m2!1sfr!2sdz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
          
        
    </div>
        </section>

        <!-- Formulaire de contact -->
        <section class="contact-form">
            <h2>Envoyez-nous un message</h2>
            <form action="process_contact.php" method="post">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>

                <label for="subject">Sujet :</label>
                <input type="text" id="subject" name="subject" required>

                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit" class="submit-button">Envoyer</button>
            </form>
   
        </section>
    </div>

   

    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</body>
</html>
