<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "jour09";

try {
    // Connect to the database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to retrieve the room name and its corresponding floor name
    $sql = "SELECT salles.nom AS salle_nom, etage.nom AS etage_nom FROM salles JOIN etage ON salles.id_etage = etage.id";

    // Execute the query
    $stmt = $conn->query($sql);

    // Fetch the results as an associative array
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Output the table HTML
    echo "<table>";

    // Output table header with field names
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nom de la salle</th>";
    echo "<th>Nom de l'étage</th>";
    echo "</tr>";
    echo "</thead>";

    // Output table rows with the data
    echo "<tbody>";
    foreach ($results as $row) {
        echo "<tr>";
        echo "<td>".$row['salle_nom']."</td>";
        echo "<td>".$row['etage_nom']."</td>";
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
    <p>En utilisant PHP, connectez-vous à la base de données “jour09”. À l’aide d’une requête
SQL, sélectionnez récupérer le nom des salles et le nom de leur étage. Affichez le
résultat de cette requête dans un tableau HTML. La première ligne de votre tableau
HTML doit contenir le nom des champs. Les suivantes doivent contenir les données
présentes dans votre base de données.</p>
</body>
</html>