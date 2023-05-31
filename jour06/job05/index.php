<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Jour 06</title>
</head>

<body>
    <h1 id="neonText">
        Job 06
        <span class="textVersion" id="layer1"></span>
        <span class="textVersion" id="layer2"></span>
    </h1>

    <p>
        Créez une fonction nommée “occurrences()”.
        Cette fonction prend en paramètre une chaîne de caractères nommée “$str” et un
        caractère nommé “$char”<br>
        Elle doit retourner le nombre d'occurrences du caractère “$char” dans “$str”.<br>
        Exemple : si $str = “Bonjour” et $char=”o” alors le nombre d'occurrences de $char dans
        $str sera : 2
    </p>
    <fieldset>
        <legend>occurrences</legend>
        <form action="test.php" method="post" target="_blank">
            <label for="frase">Ecrivez un mott:</label>
            <input type="text" name="frase">
            <input type="submit" value="Go!">
        </form>
    </fieldset>
    <Script>
        $(document).ready(function() {

            setInterval(function() {

                // Selecting only the visible layers:
                var versions = $('.textVersion:visible');

                if (versions.length < 2) {
                    // If only one layer is visible, show the other
                    $('.textVersion').fadeIn(800);
                } else {
                    // Hide the upper layer
                    versions.eq(0).fadeOut(800);
                }
            }, 1000);

        });
    </Script>
</body>

</html>