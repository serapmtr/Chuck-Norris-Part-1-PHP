<?php

function stringToBinary()
{
    $string = readline("Input string: \n");

    $characters = str_split($string, 1);

    $binary = [];
    foreach ($characters as $character) {
        $data = unpack('H*', $character);
        $binary[] = base_convert($data[1], 16, 2);
    }


    return $binary;
}

$result = "";
$binaryStr = "";

$converted = stringToBinary();




for ($k = 0; $k < count($converted); $k++) {
    $binary[$k] = str_split($converted[$k], 1);

    $binaryStr .= implode($binary[$k]);
}


for ($i = 0; $i < strlen($binaryStr) - 1; $i++) {

    if ($binaryStr[$i] == "1") {
        $result .= "0 ";
    }

    if ($binaryStr[$i] == "0") {
        $result .= "00 ";
    }

    $j = 0;

    for (; $j < strlen($binaryStr); ) {
        if (isset($binaryStr[$i]) && (isset($binaryStr[$i + $j])) && ($binaryStr[$i] == $binaryStr[$i + $j])) {
            $result .= "0";
            $j++;
        } else {
            break;
        }
    }


    $i += $j - 1;


    $result .= " ";

}

echo ("The result: \n" . $result);
?>