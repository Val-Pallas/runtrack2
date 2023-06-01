<?php
session_start();

if ($_POST["name"]) {
    setcookie("name", $_POST["name"], time() + 365 * 24 * 3600, "/");
    header("Location: index.php");
    exit();
}

if ($_POST["reset"] && $_POST["reset"] == 1) {
    setcookie("name", "", time() - 3600, "/");
    header("Location: index.php");
    setcookie("nbvisites", "0", time() + 365 * 24 * 3600, "/");
    header("Location: cookies.php");
    exit();
}

$visits = ($_COOKIE["nbvisites"]) ? $_COOKIE["nbvisites"] : 0;
$visites++;

setcookie("nbvisites", $visites, time() + 365 * 24 * 3600, "/");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 02</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <p>Créez un cookie nommé “nbvisites”. À chaque fois que la page est visitée, ajoutez 1.
        Afficher le contenu du cookie.
        Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.
    </p>
    <fieldset>
        <legend>🍪</legend>
        <?php if ($_COOKIE["name"]) : ?>
            <form action="index.php" method="post">
                <label for="name">name</label>
                <input type="text" name="name" id="name" required><br>
                <label for="message">Message</label>
                <input type="text" name="message"><br>
                <input type="submit" value="submit">
            </form>
        <?php else : ?>
            <p>Welcome Back,</p><?php echo $_COOKIE["name"]; ?>!</p>
            <form action="" method="post">
                <input type="reset" name="reset" value="1">
                <button type="submit">Reset</button>
            </form>
        <?php endif; ?>
        <p>Number of visits: <?php echo $visits; ?></p>
    </fieldset>


</body>

</html>