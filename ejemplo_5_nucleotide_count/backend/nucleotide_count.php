<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Content-Type: application/json");

/*We represent a DNA sequence as an ordered collection of these four nucleotides and a common way to do that is with a string of characters 
such as "ATTACG" for a DNA sequence of 6 nucleotides. 'A' for adenine, 'C' for cytosine, 'G' for guanine, and 'T' for thymine.

Given a string representing a DNA sequence, count how many of each nucleotide is present. If the string contains characters that
aren't A, C, G, or T then it is invalid and you should signal an error.

For example:

"GATTACA" -> 'A': 3, 'C': 1, 'G': 1, 'T': 2
"INVALID" -> error
*/

$word = $_POST["word"] ?? '';

// Si la palabra está vacía, devolver un error
if (empty($word)) {
    echo json_encode(["error" => "No word provided"]);
    exit;
}

$nucleotides = array("A" => 0, "C" => 0, "G" => 0, "T" => 0);

// Recorrer la palabra y contar nucleótidos
for ($i = 0; $i < strlen($word); $i++) {
    if (!in_array($word[$i], ["A", "C", "G", "T"])) {
        echo json_encode(["error" => "Invalid nucleotide found"]);
        exit;
    }
    $nucleotides[$word[$i]]++;
}

// Devolver los resultados como JSON
echo json_encode($nucleotides);

