<?php

declare (encoding='UTF-8');

$animalsstr = '🐀🐁🐂🐃🐄🐅🐆🐇🐈🐉🐊🐋🐌🐍🐎🐏🐐🐑🐒🐓🐔🐕🐖🐗🐘🐙'
        . '🐚🐛🐜🐝🐞🐟🐠🐡🐢🐣🐤🐥🐦🐧🐨🐩🐪🐫🐬🐭🐮🐯🐰🐱🐲🐳🐴🐵'
        . '🐶🐷🐸🐹🐺🐻🐼🐽🐾🐿';

$animals = mb_str_split($animalsstr);
foreach ($animals as $animal) {
    for ($pos = 0; $pos < strlen($animal); $pos++) {
        $byte = substr($animal, $pos);
        echo "Byte $pos of $animal has value " . ord($byte) . PHP_EOL;
    }
}
?>