<?php
function occurrences(){
    $str = $_POST["frase"];
    
    $charCounts = count_chars($str, 1) ;

    foreach ($charCounts as $char => $count) {
       $out =  "Il y a $count occurence(s) de \"" . chr($char). "\" dans la phrase.\n";
    }
    return $out ;
}

echo occurrences();
?>

