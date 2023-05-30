<?php
$haut = $_GET["hauteur"];
$larg= $_GET["largeur"];
    #echo $_GET["hauteur"]."<br>";
    #echo $_GET["largeur"]."<br>";
    for($i = 0; $i <= $larg/2 ; $i++){
        echo str_repeat("&nbsp;",$larg-($i*2))."/".str_repeat("_",$i*2)."\\"."</br>";
    }
    for($i = 1; $i <= $haut; $i++){
        echo "|".str_repeat("&nbsp;",$larg*2)."|"."</br>";

    }
    echo "|".str_repeat("_",$larg)."|";
?>
