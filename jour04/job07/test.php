<?php
if (isset($_GET["hauteur"]) && isset($_GET["largeur"])) {
    $largeur = $_GET["largeur"];
    $hauteur = $_GET["hauteur"];

    // Display the roof
    for ($i = 0; $i < $hauteur; $i++) {
        for ($j = 0; $j < $largeur; $j++) {
            if ($i < $hauteur / 2 && ($j >= ($largeur / 2 - $i) && $j <= ($largeur / 2 + $i))) {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo "<br>";
    }

    // Display the walls
    for ($i = 0; $i < $hauteur / 2; $i++) {
        for ($j = 0; $j < $largeur; $j++) {
            if ($j == 0 || $j == $largeur - 1) {
                echo "|";
            } else {
                echo " ";
            }
        }
        echo "<br>";
    }
}

if (isset($_GET["hauteur"])&&($_GET["largeur"])) {
    $largeur = $_GET["hauteur"];
    $hauteur = $_GET["largeur"];
    for ($i = 0; $i < $largeur; $i++) {
        echo "/";
    } 
    for ($j = 0; $j < $hauteur; $j++) {

        echo "\\";
    }
    
}
?>