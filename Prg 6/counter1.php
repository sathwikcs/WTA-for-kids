<?php
$file = 'count.txt';

if (file_exists($file)) {
    $count = intval(file_get_contents($file));
} else {
    $count = 0;
}

$count++;

file_put_contents($file, $count);

echo "You are visitor number: $count";
?>
