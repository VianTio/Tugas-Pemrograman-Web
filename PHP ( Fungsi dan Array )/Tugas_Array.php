<?php
$matrik1 = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3],
];

$matrik2 = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1],
];

$hasil = [
    [],
];

for ($i = 0; $i <= sizeof($matrik1) - 1; $i++) {
    for ($j = 0; $j <= sizeof($matrik1[0]) - 1; $j++) {
        $hasil[$i][$j] = $matrik1[$i][$j] + $matrik2[$i][$j];
    }
}

echo "<pre>";
print_r($hasil);
echo "</pre>";
?>