<?php

$animals = [
    'Europe' => ['Felis silvestris', 'Alopex', 'Phoca vitulina'],
    'Africa' => ['Antellidae', 'Homopus femoralis', 'Pelusios nanus'],
    'Asia' => ['Bos javanicus', 'Gaurus', 'Elephantidae'],
    'Antarctica' => ['Rossii', 'Orcinus orca', 'Scolimastra jubini'],
    'Australia' => ['Ornithorhynchus anatinus', 'Thylacinus cynocephalus', 'Tachyglossus aculeatus'],
    'South America' => ['Wiedii', 'Myrmecophaga tridactyla', 'Phyllotis darwini'],
    'North America' => ['Mammuthus columbi', 'Lepus othus', 'Scalopus aquaticus']
];

$newAnimals = [];
foreach ($animals as $continents => $animalsArray) {
    foreach ($animalsArray as $animalName) {
        if (count(explode(' ', $animalName)) == 2) {
            $newAnimals[] = $animalName;
            $firstNames[] = explode(' ', $animalName)[0];
            $secondNames[] = explode(' ', $animalName)[1];
        }
    }
}

shuffle($firstNames);
shuffle($secondNames);

$randomAnimals = [];
for($i = 0; $i < count($newAnimals); $i++){
    $randomAnimals[] = $firstNames[$i]." ".$secondNames[$i];
}


var_dump($randomAnimals);

?>
