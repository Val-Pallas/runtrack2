<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 03</title>
</head>

<body>
    <fieldset>
        <p>
            Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton
            submit. Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de
            session. Afficher l’ensemble des prénoms.
            Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste. </p>
            <br>
            <legend>Job 03</legend>
            <form action="index.php" method="post">
                <label for="name">Prenom</label>
                <input type="text" name="prenom" id="">
                <input type="submit" value="envoyer">
            </form>
        <?php
        session_start();
        if (isset($_POST['prenom'])) {
            // Ajouter le prénom dans la variable de session
            $_SESSION['prenoms'][] = $_POST['prenom'];
        }


        if (isset($_POST['reset'])) {
            $_SESSION['prenoms'] = array();
        }

        if (isset($_SESSION['prenoms']) && count($_SESSION['prenoms']) > 0) {
            echo "<h2>Prénoms enregistrés :</h2>";
            echo "<ul>";
            foreach ($_SESSION['prenoms'] as $prenom) {
                echo "<li> $prenom </li>";
            }
            echo "</ul>";
        }
        echo "<form action='index.php' method='post'>";
        echo "<input type='submit' name='reset' value='Reset'>";
        echo "</form>";


        ?>
    </fieldset>

</body>

</html>