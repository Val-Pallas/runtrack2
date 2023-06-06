<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    En utilisant PHP et PDO, connectez-vous à la base de données “jour09”. À l’aide d’une
requête SQL, récupérez l’ensemble des informations de la table étudiants. Affichez le
résultat de cette requête dans un tableau HTML. La première ligne de votre tableau html
(thead) doit contenir le nom des champs. Les suivantes (tbody) doivent contenir les
données présentes dans votre base de données.
    </p>
    <?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "velvet";
$dbname = "jour09";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Requête SQL pour récupérer les informations de la table "etudiants"
$sql = "SELECT * FROM etudiants";
$result = $conn->query($sql);

// Vérification du résultat de la requête
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<thead><tr><th>ID</th><th>Prénom</th><th>Nom</th><th>Naissance</th><th>Sexe</th><th>Email</th></tr></thead>";
    echo "<tbody>";
    // Parcours des lignes de résultat
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["prenom"] . "</td>";
        echo "<td>" . $row["nom"] . "</td>";
        echo "<td>" . $row["naissance"] . "</td>";
        echo "<td>" . $row["sexe"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "Aucun résultat trouvé.";
}

// Fermeture de la connexion à la base de données
$conn->close();
?>

</body>
</html>