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
        if (strpos($animalName,' ') !== false) {
            array_push($newAnimals, $animalName);
        }
    }
}

print_r($newAnimals);

$firstNames = array_map(function($a){return explode(' ', $a)[0];}, $newAnimals);
$secondNames = array_map(function($a){return explode(' ', $a)[1];}, $newAnimals);

shuffle($firstNames);
shuffle($secondNames);

$randomAnimals = array();
for($i = 0; $i < sizeof($newAnimals); $i++){
    array_push($randomAnimals, $firstNames[$i]." ".$secondNames[$i]);
}
print_r($randomAnimals);

?>
