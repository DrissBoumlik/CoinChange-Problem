<?php

require_once('CoinChangeManager.php');
use App\CoinChangeManager;
$coins = [50000,  20000,  30000,  10000,   5000,   3000,   2000,   1000,   500,   100];
$limits = [    3,      4,      4,      2,      4,      5,      4,      4,     6,     2];
$price = 231545 * 1.2; // = 277854


$changerMngr = new CoinChangeManager();
$combinations = $changerMngr->leastChange($coins, $limits, $price);
echo json_encode($combinations);
