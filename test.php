<?php

// echo("&copy; " . date("Y"));

$count = file_get_contents("visits.txt");

$count = $count + 1;

file_put_contents("visits.txt", $count);

echo("visits: " + $count);

?>