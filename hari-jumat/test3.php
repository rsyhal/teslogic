<?php

function Suku($a, $n) {
    return $a * 4 + $n * 3;  
}

$a = 9;

for ($n = 1; $n <= 12; $n++) {
    $hasil = Suku($a, $n);
    echo "Suku ke-$n: $hasil<br>";
}
?>
