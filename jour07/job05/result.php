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
        <?php
        if (!playersRegistered()) {
        header("location: index.php");
        }

        resetBoard();
        ?>

        <table class="wrapper" cellpadding="0" cellspacing="0">
            <tr>
                <td>

                    <div class="welcome">

                        <h1>
                            <?php
                            if ($_GET['player']) {
                                echo currentPlayer() . " won!";
                            } else {
                                echo "It's a tie!";
                            }
                            ?>
                        </h1>

                        <div class="player-name">
                            <?php echo playerName('x') ?>'s score: <b><?php echo score('x') ?></b>
                        </div>

                        <div class="player-name">
                            <?php echo playerName('o') ?>' score: <b><?php echo score('o') ?></b>
                        </div>

                        <a href="play.php">Play again</a><br />

                        <a href="index.php" class="reset-btn">Reset</a>
                    </div>

                </td>
            </tr>
        </table>

</body>

</html>