<?php

$random = rand(0,100);
$var1 = 1;
$var2 = 1;


echo nl2br ("Число пользователя: $random\n");

do {
    if ($var1 > $random) {
        echo "Число не входит в числовой ряд!";
        break;
    }
    elseif ($var1 == $random) {
        echo "Число входит в числовой ряд!";
        break;
    }
    else
        $var3 = $var1;
        $var1 = $var1 + $var2;
        $var2 = $var3;
}
while ($var2 < $random);
?>
