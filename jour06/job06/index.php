<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 06</title>
</head>

<body>
    <p>
        Créez une fonction nommée “leetSpeak()”. Cette fonction prend en paramètre une
        chaîne de caractères nommée “$str”.
        Elle doit retourner la chaîne de caractères “$str” convertie en leet speak. Cela signifie
        qu’elle doit la modifier de sorte que :
    <ul>
        <li>les “A” deviennent des “4”,</li>
        <li>les “B” des “8”,</li>
        <li>les “E” des “3”,</li>
        <li>les “G” des “6”,</li>
        <li>les “L” des “1”,</li>
        <li>les “S” des “5”,</li>
        <li>les “T” des “7”.</li>
    </ul>
    <h4>Cela est valable que l’on crie ou non (majuscules et minuscules).</h4>
    </p>
    <?php
    function leetSpeak($str)
    {
        $str = str_ireplace("A", 4, $str);
        $str = str_ireplace("B", 8, $str);
        $str = str_ireplace("G", 6, $str);
        $str = str_ireplace("L", 1, $str);
        $str = str_ireplace("S", 5, $str);
        $str = str_ireplace("T", 7, $str);
        $str = str_ireplace("Z", 2, $str);

        return ($str);
    }
    if ($_POST["frase"]) {
        $str = $_POST["frase"];
        $replace = leetSpeak($str);
    }
    echo "In numbers: " . $replace;
    ?>
    <fieldset>
        <legend>occurrences</legend>
        <form action="index.php" method="post" target="_blank">
            <label for="frase">Ecrivez un mott:</label>
            <input type="text" name="frase">
            <input type="submit" value="Go!">
        </form>
    </fieldset>
</body>

</html>