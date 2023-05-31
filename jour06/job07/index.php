<?php
function caseColor($mot, $color, $bold, $size) {
    
    if($bold == 1) {
        $first= "<font style='color:".$color.";font-size:".$size."%;'><b>".
            strtoupper($mot[0])."</b></font>"; 
        // color et met la première lettre en Majuscule
    } else {
        $first= "<font style='color:".$color.";font-size:".$size.";'>".
            strtoupper($mot[0])."</font>"; 
        // color, met la première lettre en Majuscule et en gras
    }
    
    
    return $first.substr($mot, 1);   
}
if(isset($_POST['string'])&& isset($_POST['option'])){ 
    $str = ($_POST['string']);
    $option = ($_POST['option']);
        
    if($option =='maj'){
        echo caseColor($str,"green",0,150);
    }elseif($option == 'gras'){
        echo "<strong>($str)</strong>";
    }elseif($option == 'cesar'){
        echo str_rot13($str);
    }elseif($option == 'plataforme'){
        echo str_replace(" ", "-",$str);
    }else{
        echo "Make a choise";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include $choix. ""; ?>
    </style>
</head>
<body>
<tr>
    <fieldset>
        <p> Créez un formulaire &lt;form&gt; qui contient :
        <ul>
            <ol>un champ nommé “str” de type “text”,</ol> 
            <ol>une liste déroulante nommée “fonction”,</ol> 
            <ol>un bouton submit.</ol>
            <h5><b> vous validez le formulaire, vous devez appliquer des transformations à “str” en
                fonction de l’option choisie dans la liste déroulante.</b></h5><br>
                <h3>Les choix possibles sont : </h4><br>
                <ol>“gras” : une fonction qui prend en paramètre une chaine de caractère et écrit
                    celle-ci en mettant en gras les mots commençant par une lettre majuscule.</ol>
                    <ol>“cesar” : une fonction qui prend en paramètre une chaine de caractère et un
                        nombre (qui vaut 2 par défaut). Elle doit afficher la chaine de caractère en
                        décalant chaque caractère d’un nombre égal au nombre passé en paramètre.
                        ex : Si le paramètre vaut 1 alors “e” devient “f”. Si décalage vaut 3 alors “z”
                        devient “c”.</ol>
                        <ol>“plateforme”, une fonction qui prend en paramètre une chaine de caractère. Elle
                            affiche la chaine de caractère en ajoutant un “_” aux mots finissant par “me”.</ol>
                        </ul>
                    </p>
                </tr>
    </fieldset>
    <fieldset>
        <legend>Options</legend>
        <form action="index.php" method="post">
            <label for="string">Ecrivez un mot ou une phrase: </label>
            <input type="text" name="string" id="string"><br>
            <label for="option">Les choix possibles sont :</label><br>
            <select name="option">
                <option value="">--selectioner--</option><br>
                <option value="gras">Gras</option>
                <option value="cesar">Cesar</option>
                <option value="plateforme">Plateforme</option>
                <option value="maj">Majuscule</option>
            </select> <br>
            <input type="submit" value="go">
        </form>
    </fieldset>

</body>
</html>