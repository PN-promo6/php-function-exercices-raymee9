<?php

function DecodeDNA($gen1, $gen2)
{
    $dna = "";
    for ($i = 0; $i < strlen($gen1); $i++) {
        if ($gen1[$i] != $gen2[$i]) {
            $dna = $dna . "^";
        } else {
            $dna = $dna . " ";
        }
    }
    return $dna;
}

echo DecodeDNA("srr", "ogg");
