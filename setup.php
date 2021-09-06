<?php

include 'includes/autoload.inc.php';
$dbh = new DBH();

// sql for creating the table
$sql = "CREATE TABLE IF NOT EXISTS wind_turbine_items(
    id INT PRIMARY KEY AUTO_INCREMENT,
    coating_dmg TINYINT(2) DEFAULT 0,
    lightning_strike TINYINT(2) DEFAULT 0
);";

$stmt = $dbh->connect()->prepare($sql);
if($stmt->execute()){
    echo "Setup Success!";
}