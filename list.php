<?php

$list = glob('/Applications/MAMP/hw7/tests/*.json');

foreach($list as $i => $v) {
    $name = basename($v);
    echo $name,"  ", "Number ", $i, "</br>";
}


$file = file_get_contents(__DIR__. '/questions.json');
$questions = json_decode($file, true);


?>
