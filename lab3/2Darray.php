<?php
$array = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

for ($i = 0; $i <= 2; $i++) {
    for ($j = 0; $j <= 2-$i; $j++) {
        echo $array[$i][$j]." ";
    }
    echo "<br>";
}
echo "<br>";
for ($i = 0; $i <= 2; $i++) {
    for ($j = 3-$i; $j <= 3; $j++) {
        echo $array[$i][$j]." ";
    }
    echo "<br>";
}
?>