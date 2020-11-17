<?php
$bilangan1 = 100;
$bilangan2 = 150;

function bilTerbesar()
{
    global $bilangan1;
    global $bilangan2;
    if ($bilangan1 > $bilangan2) {
        echo "Bilangan 1 Lebih Besar Yaitu : " . $bilangan1;
    } else {
        echo "Bilangan 2 Lebih Besar Yaitu : " . $bilangan2;
    }

}

echo "Bilangan 1 =" . $bilangan1 . "<br>";
echo "Bilangan 2 =" . $bilangan2 . "<br><br>";
bilTerbesar();
?>