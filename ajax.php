<?php

include 'includes/autoload.inc.php';

$items = new WindTurbineItems();

// Set the default values
$total = 100;
$coatingDmgBase = 3;
$lightningStrikeBase = 5;

// Get current number of rows in database;
$count = $items->count();

//
if($total > $count) {
    $items->insert($total - $count);
}

$items->coatingDmg($coatingDmgBase);
$items->lightningStrike($lightningStrikeBase);

// list result
echo json_encode($list = $items->listAllItems());