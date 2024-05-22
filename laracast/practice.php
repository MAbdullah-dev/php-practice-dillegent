<?php
// echo "Hello-World";
// $name="Abdullah";
// echo $name;

// $train=true;

// if ($train) {
//     echo "you can GO";
// }else{
//     echo "train come tomarrow";
// }

// $color=["red","blue","green","red"];
// print_r($color);
$car = [
    ["owner" => "Ahmed", "car" => "BMW"],
    ["owner" => "John", "car" => "BMW"],
];

function filtercar($cars, $owner) {
    $filteredCars = [];
    foreach ($cars as $car) {
        if ($car['owner'] == $owner) {
            $filteredCars[] = $car;
        }
    }
    return $filteredCars;
}

$owner = 'Ahmed';
$filteredCars = filtercar($car, $owner);
?>

<?php foreach ($filteredCars as $car) : ?>
    <ul>
        <li>Owner: <?=$car['owner']?></li>
        <li>Car: <?=$car['car']?></li>
    </ul>
<?php endforeach ?>
