<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "jour09";

try {
    // Connect to the database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to select all information from salles, sorted by capacite in descending order
    $sql = "SELECT * FROM salles ORDER BY capacite DESC";

    // Execute the query
    $stmt = $conn->query($sql);

    // Fetch the result as an associative array
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Output the table HTML
    echo "<table>";

    // Output table header with field names
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nom</th>";
    echo "<th>Capacité</th>";
    echo "</tr>";
    echo "</thead>";

    // Output table rows with the data
    echo "<tbody>";
    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>".$row['nom']."</td>";
        echo "<td>".$row['capacite']."</td>";
        echo "</tr>";
    }
    echo "</tbody>";

    echo "</table>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
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
    <p>En utilisant php, connectez-vous à la base de données “jour09”. À l’aide d’une requête
SQL, sélectionnez l’ensemble des informations des salles en les triant par capacité
décroissante. Affichez le résultat de cette requête dans un tableau HTML. La première
ligne de votre tableau HTML doit contenir le nom des champs. Les suivantes doivent
contenir les données présentes dans votre base de données.</p>
</body>
</html>