

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
$i = $min;

while ($i % $i == 0) {
        echo "Les nombres premiers entre $min et ".$max." sont : ".'<b><u>' . $i . '</u></b><br />';

    $i++;
 }

?>
 


</body>
</html>