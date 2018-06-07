<?php

$animals = [
    'Europe' => ['Felis silvestris', 'Alopex sfdfsdf fsdfdsf sdfsdfsd', 'Phoca vitulina'],
    'Africa' => ['Antellidae', 'Homopus femoralis', 'Pelusios nanus'],
    'Asia' => ['Bos javanicus', 'Gaurus', 'Elephantidae'],
    'Antarctica' => ['Rossii', 'Orcinus orca', 'Scolimastra jubini'],
    'Australia' => ['Ornithorhynchus anatinus', 'Thylacinus cynocephalus', 'Tachyglossus aculeatus'],
    'South America' => ['Wiedii', 'Myrmecophaga tridactyla', 'Phyllotis darwini'],
    'North America' => ['Mammuthus columbi', 'Lepus othus', 'Scalopus aquaticus']
];

foreach ($animals as $continents => $animalsArray) {
    foreach ($animalsArray as $animalName) {
        if (strpos($animalName,' ') !== false) {
            $newAnimals[] = $animalName;
            $firstNames[] = explode(' ', $animalName)[0];
            $secondNames[] = explode(' ', $animalName)[1];
        }
    }
}

shuffle($firstNames);
shuffle($secondNames);

for($i = 0; $i < count($newAnimals); $i++){
    $randomAnimals[] = $firstNames[$i]." ".$secondNames[$i];
}


var_dump($randomAnimals);

?>
