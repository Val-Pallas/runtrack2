<?php
session_start();
if (isset($_POST["prenom"])) {
    $prenom = $_POST['prenom'];
    $_SESSION['namecookie'] = $prenom;
    setcookie('namecookie', $prenom);
}

if (isset($_SESSION['namecookie'])) {
    $prenom = $_SESSION['namecookie'];
    echo "Bonjour $prenom !";
    echo "<form action='test.php' method='post'>";
    echo "<input type='submit' name='deco' value='Déconnexion'>";
    echo "</form>";
} else {
    if (isset($_COOKIE['namecookie'])) {
        $prenom = $_COOKIE['namecookie'];
        echo "Bonjour $prenom !";
        echo "<form action='test.php' method='post'>";
        echo "<input type='submit' name='deco' value='Déconnexion'>";
        echo "</form>";
    } else {
        echo "<fieldset>";
        echo "<legend>cookies session</legend>";
        echo "<form action='test.php' method='post'>";
        echo "<label for='prenom'>Prénom</label>";
        echo "<input type='text' name='prenom' id=''>";
        echo "<input type='submit' value='Connexion'>";
        echo "</form>";
        echo "</fieldset>";
    }
}

if (isset($_POST["deco"])) {
    session_destroy();
    setcookie("namecookie", "", time() - 3600, "/");
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job04</title>
</head>
<body>
    <p>Créez un formulaire de connexion qui contient un input de type texte nommé
    “prenom” et un bouton submit nommé “connexion”. Lorsque l’on valide le formulaire, le
    prénom est ajouté dans un cookie. Si un utilisateur a déjà entré son prénom, n'affichez
    plus le formulaire de connexion. À la place, écrivez “Bonjour prenom !” et ajouter un
    bouton “Déconnexion” nommé “deco”. Lorsque l’utilisateur se déconnecte, il faut à
    nouveau afficher le formulaire de connexion.</p>

</body>
</html>
