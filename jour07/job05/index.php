<?php
require_once "functions.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>TicTacToe game</title>

    <link rel='stylesheet' href='style.css' type='text/css' />
</head>

<body>

    <div class="wrapper">
        <form method="post" action="register-players.php">
            <div class="welcome">
                <h1>Start playing Tic Tac Toe!</h1>
                <h2>Please fill in your names</h2>

                <div class="p-name">
                    <label for="player-x"> Player (First)</label>
                    <input type="text" id="player-x" name="player-x" required />
                </div>

                <div class="p-name">
                    <label for="player-o"> Player (Second)</label>
                    <input type="text" id="player-o" name="player-o" required />
                </div>

                <button type="submit">Start</button>
            </div>
        </form>

    </div>
</body>

</html>