<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$consonnes = array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z');
$voyelles = array('a', 'e', 'i', 'o', 'u', 'y');
$counCon = 0;
$counVoy = 0;

// Compter le nombre d'occurrences de consonnes et de voyelles
for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]);
    if (in_array($char, $consonnes)) {
        $counCon++;
    } elseif (in_array($char, $voyelles)) {
        $counVoy++;
    }
}

// Afficher les résultats dans un tableau HTML
echo '<table>';
echo '<tr>';
echo '<th>Voyelles</th>';
echo '<th>Consonnes</th>';
echo '</tr>';
echo '<tr>';
echo '<td>' . $counVoy . '</td>';
echo '<td>' . $counCon . '</td>';
echo '</tr>';
echo '</table>';
?>