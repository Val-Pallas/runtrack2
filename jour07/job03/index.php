
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
        Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste.
        <br>
        <legend>Afficher</legend>
        <form action="index.php" method="post">
            <label for="name">Prenom</label>
            <input type="text" name="prenom" id=""><br>
            <input type="submit" value="envoyer">
                <?php
                if ($_POST["prenom"]){
                    $_SESSION['prenoms'][]= $_POST[$prenom];
                        $list []= $_SESSION['prenoms'];
                        
                    }
                    if (isset($_SESSION['prenoms']) && count($_SESSION['prenoms']) > 0) {
                        echo "<h2>Prénoms enregistrés :</h2>";
                        echo "<ul>";
                        echo "<li>". $prenom."</li>";
                        echo "</ul>";
                      
                   
                    }
                         
                        
                ?>
            </form>
    </fieldset>
   
</body>
</html>
    session_start();

    // Vérifier si le formulaire a été soumis
    if (isset($_POST['prenom'])) {
        // Ajouter le prénom dans la variable de session
        $_SESSION['prenoms'][] = $_POST['prenom'];
    }

    // Réinitialiser la liste si le bouton "reset" a été cliqué
    if (isset($_POST['reset'])) {
        $_SESSION['prenoms'] = array();
    }

    // Afficher les prénoms enregistrés
    if (isset($_SESSION['prenoms']) && count($_SESSION['prenoms']) > 0) {
        echo "<h2>Prénoms enregistrés :</h2>";
        echo "<ul>";
        foreach ($_SESSION['prenoms'] as $prenom) {
            echo "<li>$prenom</li>";
        }
        echo "</ul>";
    }
    ?>