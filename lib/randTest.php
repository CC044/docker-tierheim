<body style="background-color: #000; color: #fff;">
<?php
$colors = array("Red", "Blue", "Green", "Yellow", "Orange");

$selectedColors = array_rand($colors, mt_rand(1, 3));
var_dump($selectedColors);

// Überprüfen, ob es sich um einen einzelnen Schlüssel oder ein Array von Schlüsseln handelt
if (is_array($selectedColors)) {
    echo 'Zufällige Farben: ';
    foreach ($selectedColors as $index) {
        echo $colors[$index] . ' ';
    }
} else {
    echo 'Zufällige Farbe: ' . $colors[$selectedColors];
}


?>
</body>
