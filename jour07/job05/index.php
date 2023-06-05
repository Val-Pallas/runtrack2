<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job05t</title>
</head>

<body>
    <h1>Morpion</h1>
    <p>Développez le fameux jeu du morpion. Faites un tableau HTML avec 3 lignes et 3
        colonnes représentant la grille. Au début de la partie, chacune des cases contient un
        bouton de type submit dont la valeur est “-”. Si un joueur clique sur ce bouton, le bouton
        est remplacé par un “O” ou par un “X”. C’est le joueur “X” qui commence.
        Dès qu’un joueur a gagné, affichez “X a gagné” ou “O a gagné” et réinitialisez la partie. Si
        toutes les cases ont été cliquées et que personne n’a gagné, affichez “Match nul” et réinitialisez la partie. Un bouton “réinitialiser la partie” présent en dessous de la grille
        permet également de réinitialiser la partie à tout moment.</p>
    <?php
    require_once "./templates/header.php";
    ?>

    <form method="post" action="register-players.php">
        <div class="welcome">
            <h1>Start playing Tic Tac Toe!</h1>
            <h2>Please fill in your names</h2>

            <div class="p-name">
                <label for="player-x"> Player (First)</label>
                <input type="text" id="player-x" name="player-x" required />
            </div>

            <div class="p-name">
                <label for="player-o"> Player (Sceond)</label>
                <input type="text" id="player-o" name="player-o" required />
            </div>

            <button type="submit">Start</button>
        </div>
    </form>

</body>

</html>
<?php
require_once "./templates/footer.php";
