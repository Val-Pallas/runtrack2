

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ph, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$min = 0;
$max = 1000;

echo "Les nombres premiers entre $min et $max sont : <br>";

for ($i = $min; $i <= $max; $i++) {
    $isPrime = true;

    if ($i < 2) {
        $isPrime = false;
    } else {
        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j == 0) {
                $isPrime = false;
                break;
            }
        }
    }

    if ($isPrime) {
        echo '<em>' . $i . ' - nombre premier</em><br />';
    }
}

?>

</body>
</html>