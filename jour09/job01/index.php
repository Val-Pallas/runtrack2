<?php
// Database credentials
$host = "localhost";
$dbname = "jour09";
$username = "root";
$password = "root";

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch all records from the "etudiants" table
    $query = "SELECT * FROM etudiants";
    $stmt = $pdo->query($query);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Display the result in an HTML table
    echo "<table>";
    echo "<thead><tr>";
    foreach ($result[0] as $column => $value) {
        echo "<th>$column</th>";
    }
    echo "</tr></thead>";
    echo "<tbody>";
    foreach ($result as $row) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

// Fermeture de la connexion à la base de données
$conn->close();
?>
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

</body>

</html>
