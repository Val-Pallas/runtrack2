<?php
mysqli_connect();
$servername = "localhost";  // Remplacez par le nom de votre serveur MySQL
$username = "root";  // Remplacez par votre nom d'utilisateur MySQL
$password = "velvet";  // Remplacez par votre mot de passe MySQL
$dbname = "jour09";  // Remplacez par le nom de votre base de données

// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

// Utilisez la connexion pour exécuter des requêtes SQL ou effectuer des opérations sur la base de données

// Fermeture de la connexion
mysqli_close($conn);
?>
