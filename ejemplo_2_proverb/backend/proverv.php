<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
/*
For want of a horseshoe nail, a kingdom was lost, or so the saying goes.

Given a list of inputs, generate the relevant proverb. For example, given the list ["nail", "shoe", "horse", "rider", "message", "battle", "kingdom"],
 you will output the full text of this proverbial rhyme:

For want of a nail the shoe was lost.
For want of a shoe the horse was lost.
For want of a horse the rider was lost.
For want of a rider the message was lost.
For want of a message the battle was lost.
For want of a battle the kingdom was lost.
And all for the want of a nail.
Note that the list of inputs may vary; your solution should be able to handle lists of arbitrary length and content.
No line of the output text should be a static, unchanging string; all should vary according to the input given.
*/

$list = ["nail", "shoe", "horse", "rider", "message", "battle", "kingdom"];
$provervs = [];

for ($i = 0; $i < count($list); $i++) {

    if ($i == 6) {
        break;
    }
    $provervs[] = 'For want of a <strong>' . $list[$i] . '</strong> the ' . '<strong>' . $list[$i+1] . '</strong> was lost ';
}

$provervs[] = 'And all for the want of a <strong>' . $list[0] . '</strong>';

echo json_encode($provervs);


