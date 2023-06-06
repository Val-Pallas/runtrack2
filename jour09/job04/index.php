<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "jour09";

try {
    // Connect to the database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to retrieve student information with first name starting with "T"
    $sql = "SELECT * FROM etudiants WHERE prenom LIKE 'T%'";

    // Execute the query
    $stmt = $conn->query($sql);

    // Fetch all the rows from the result as an associative array
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Output the table HTML
    echo "<table>";

    // Output table header with field names
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Prénom</th>";
    echo "<th>Nom</th>";
    echo "<th>Date de naissance</th>";
    echo "<th>Sexe</th>";
    echo "<th>Email</th>";
    echo "</tr>";
    echo "</thead>";

    // Output table rows with student data
    echo "<tbody>";
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>".$student['id']."</td>";
        echo "<td>".$student['prenom']."</td>";
        echo "<td>".$student['nom']."</td>";
        echo "<td>".$student['naissance']."</td>";
        echo "<td>".$student['sexe']."</td>";
        echo "<td>".$student['email']."</td>";
        echo "</tr>";
    }
    echo "</tbody>";

    echo "</table>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
