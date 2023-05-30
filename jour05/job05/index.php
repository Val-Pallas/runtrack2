<?php
if(isset($_POST["style"])) {
    $selectedStyle = $_POST["style"];
    echo "Je choisis mon style " . $selectedStyle;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec changement de style</title>
    <link rel="icon" type="image/png" href="/favicon.ico" />
</head>

<body>
    <h1>Formulaire avec changement de style</h1>
    <p>
    Créer un formulaire qui contient une liste déroulante nommée “style” et un bouton submit. La liste déroulante doit proposer au moins “style1”, “style2” et “style3”. Créer 3 fichiers css nommés “style1.css”, “style2.css” et “style3.css”. Chaque style doit avoir des effets sur le design du formulaire, la couleur de background, la police d’écriture... Lorsque l’on valide le formulaire, le style sélectionné doit être inclus et donc le visuel doit changer.
    </p>

    <fieldset>
    <legend>Style formulaire</legend>
    <div class="container">
        <form action="index.php" method="POST" onsubmit="changeStyle()">
            <label for="style">Choisir un Style</label>
            <select id="style" name="style">
                <option value="style1">Style1</option>
                <option value="style2">Style2</option>
                <option value="style3">Style3</option>
            </select>
            <input type="submit" value="Changer de style">
        </form>
    </div>
</fieldset>

<script>
    // Fonction pour changer le lien du fichier CSS en fonction de la sélection
    function changeStyle() {
        var select = document.getElementById("style");
        var selectedStyle = select.options[select.selectedIndex].value;

        if (selectedStyle === "style1") {
            document.querySelector('link[href="style.css"]').href = "style1.css";
        } else if (selectedStyle === "style2") {
            document.querySelector('link[href="style.css"]').href = "style2.css";
        } else if (selectedStyle === "style3") {
            document.querySelector('link[href="style.css"]').href = "style3.css";
        }

        return false; // Prevent form submission
    }
</script>

</body>
</html>
