<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "jour09";

try {
    // Connect to the database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to select the firstname, lastname, and date of birth of students born between 1998 and 2018
    $sql = "SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'";

    // Execute the query
    $stmt = $conn->query($sql);

    // Fetch the results as an associative array
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Output the table HTML
    echo "<table>";

    // Output table header with field names
    echo "<thead>";
    echo "<tr>";
    echo "<th>Prénom</th>";
    echo "<th>Nom</th>";
    echo "<th>Date de Naissance</th>";
    echo "</tr>";
    echo "</thead>";

    // Output table rows with the data
    echo "<tbody>";
    foreach ($results as $row) {
        echo "<tr>";
        echo "<td>".$row['prenom']."</td>";
        echo "<td>".$row['nom']."</td>";
        echo "<td>".$row['naissance']."</td>";
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
SQL, sélectionnez le prénom, le nom et la date de naissance des étudiants qui sont nés
entre 1998 et 2018. Affichez le résultat de cette requête dans un tableau HTML. La
première ligne de votre tableau HTML doit contenir le nom des champs. Les suivantes
doivent contenir les données présentes dans votre base de données.</p>
</body>
</html>