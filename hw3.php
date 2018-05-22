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

foreach ($animals as $continents => $animalsArray) {
    foreach ($animalsArray as $animalName) {
        if (strpos($animalName,' ') !== false) {
            $newAnimals[] = $animalName;
        }
    }
}

$firstNames = array_map(function($animalName){return explode(' ', $animalName)[0];}, $newAnimals);
$secondNames = array_map(function($animalName){return explode(' ', $animalName)[1];}, $newAnimals);

shuffle($firstNames);
shuffle($secondNames);

for($i = 0; $i < count($newAnimals); $i++){
    $randomAnimals[] = $firstNames[$i]." ".$secondNames[$i];
}

var_dump($randomAnimals);

?>
