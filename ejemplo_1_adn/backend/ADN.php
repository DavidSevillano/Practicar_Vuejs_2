<?php
declare(strict_types=1);
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
    function distance(string $strandA, string $strandB): int
    {
        $distance = 0;
        for ($i = 0; $i < strlen($strandB); $i++) {
            if (substr($strandA, $i, 1) !== substr($strandB, $i, 1)) {
                $distance++;
            }
        }
        return $distance;

    }

    $resultado = distance("GAGCCTACTAACGGGAT", "CATCGTAATGACGGCCT");

    echo json_encode(["distance" => $resultado]);