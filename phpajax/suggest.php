<?php

$people[] = "Aron";
$people[] = "Amen";
$people[] = "Bary";
$people[] = "Bill";
$people[] = "Biter";
$people[] = "Cars";
$people[] = "Cenom";
$people[] = "Cepo";
$people[] = "Daan";
$people[] = "Reat";

$query_string = $_REQUEST['q'];
$suggestion = "";

if ($query_string !== "") {
    $query_string = strtolower($query_string);
    $len = strlen($query_string);
    foreach ($people as $person) {
        if (stristr($query_string, substr($person, 0, $len))) {
            if ($suggestion === "") {
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestions" : $suggestion;
