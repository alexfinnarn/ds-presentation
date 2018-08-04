<?php

use Ds\Set;

print '<pre>';
$array_set = range(1, 100000);
print "\$array_set = range(1, 10000);\n";
//var_dump($array_set);
print "\n";

print "Counting array...\n";
$start = microtime(TRUE);
print count($array_set);
print "\n";
$time_a = (microtime(TRUE) - $start);
print "Time: {$time_a}\n";
print "\n";

$set = new Set(range(1, 100000));
print "\$set = new Set();\n";
// var_dump($set);
print "\n";

print "Counting set...\n";
$start = microtime(TRUE);
print $set->count();
print "\n";
$time_b = (microtime(TRUE) - $start);
print "Time: {$time_b}\n";
print "\n";


print $time_a - $time_b;

print '</pre>';
