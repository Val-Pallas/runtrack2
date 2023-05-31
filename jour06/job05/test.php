
<?php
function occurrences(){
    $str = $_POST["frase"];
    
    foreach (count_chars($str, 1) as $i => $val) {
        echo "Il y a $val occurence(s) de \"" , chr($i) , "\" dans la phrase.\n";
    }
}
echo occurrences();
?>
