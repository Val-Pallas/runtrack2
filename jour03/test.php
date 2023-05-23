<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$NbrCol = 7; // Nombre de colonnes
$NbrLigne = 2; // Nombre de lignes
$affichage = "Contenu de la cellule"; // Contenu à afficher dans chaque cellule

echo '<table>';
for ($i = 1; $i <= $NbrLigne; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= $NbrCol; $j++) {
        echo '<td>';
        // ------------------------------------------
        // AFFICHAGE ligne $i, colonne $j
        echo $affichage;
        // ------------------------------------------
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>

        <table border="1">
        <tr>
            <td>200<br><i>paire</i></td>
            <td>204<br><i>impaire</i></td>
            <td>173<br><i>impaire</i></td>
            <td>98<br><i>paire</i></td>
            <td>171<br><i>impaire</i></td>
            <td>404<br><i>paire</i></td>
            <td>459<br><i>impaire</i></td>
        </tr>
        <tr>
            <td> - <br><i> - </i></td>
            <td> - <br><i> - </i></td>
            <td> - <br><i> - </i></td>
        </tr>
        </table>
</body>
</html>
