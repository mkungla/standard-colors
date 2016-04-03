<?php
include 'chart-array.inc.php';
header("Content-Type: text/plain");
$build_dir = dirname(__FILE__).DIRECTORY_SEPARATOR.'build'.DIRECTORY_SEPARATOR;

if (!is_dir($build_dir))
    mkdir($build_dir, 0755, true);

file_put_contents($build_dir.'chart.json', json_encode($ral,JSON_PRETTY_PRINT));

print 'chart.json created!'."\n";
exit();
