<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
<h1>This is a foreach loop outputting </h1>
<hr>
<?php
//DECLARE AND INITIALIZE MY ARRAY
$cars = array("mazda","toyota","suzuki","nissan","mercedes","volvo","maserati","volkswagen","tractor");

foreach ($cars as $car){
    echo "I would like to own a $car. <br>";
}

?>
</body>
