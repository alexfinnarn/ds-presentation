<?php

print '<pre>';
$array_set = range(1, 10000);
print "array_set\n";
//var_dump($array_set);
print "\n";

$start = microtime(TRUE);
print count($array_set);
print "\n";
$time_a = microtime(TRUE) - $start;
print "Time: {$time_a}\n";

$set = new \Ds\Set($array_set);
print "set\n";
//var_dump($set);
print "\n";

$start = microtime(TRUE);
print $set->count();
print "\n";
$time_b = microtime(TRUE) - $start;
print "Time: {$time_b}\n";

print $time_b/$time_a;

print '</pre>';
