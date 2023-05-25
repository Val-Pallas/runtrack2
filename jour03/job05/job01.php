<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:yellow";>
    <table border = "1">
        <tr>
            <th>Nombre</th>
            <th>Pairity</th>
        </tr>
        <?php
        $numbers = [200, 204, 173, 98, 171, 404, 459];
        
        foreach ($numbers as $number) {
            echo '<tr>';
            echo '<td>' . $number . '</td>';
            echo '<td>';
            if ($number % 2 == 0) {
                echo 'PAIRE';
            } else {
                echo 'IMPAIRE';
            }
            echo '</td>';
            echo '</tr>';
        }
        
        ?>
     </table>
</body>
</html>