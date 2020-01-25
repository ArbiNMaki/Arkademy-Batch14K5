<?php

function findDuplicates($kalimat)
{
    $kalimat = str_replace(" ", "", $kalimat);
    $container = [];
    $kalimatArr = str_split($kalimat);

    for ($i = 0; $i < count($kalimatArr); $i++) {
        $nilai = array_count_values($kalimatArr)[$kalimatArr[$i]];
        if ($nilai > 1) {
            $container[] = "$kalimatArr[$i]: $nilai ";
        }
    }

    if (count($container) < 1) {
        return $final = ["Tidak ada karakter yang berulang"];
    }

    return $final = array_unique($container);
}

$hasil = findDuplicates("hari apa saja saya bisa!");

echo "Output : <br>\n";
foreach ($hasil as $value) {
    echo $value . " </br>\n";
}

$hasil1 = findDuplicates("cepat kerjakan!!!");

echo "Output : <br>\n";
foreach ($hasil1 as $value) {
    echo $value . " </br>\n";
}

$hasil2 = findDuplicates("adobe");

echo "Output : <br>\n";
foreach ($hasil2 as $value) {
    echo $value . " </br>\n";
}


?>