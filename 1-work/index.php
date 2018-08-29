<?php

include ("eth.php");
//require 'libs/ethereum-php/ethereum.php';
// create a new object
$eth = new Ethereum('127.0.0.1', 8545);
// do your thing


$addr = "0x4E81103607839B3895AEEeb2EA5899a8De1C1F5d";


$sumEth = $ethFun->sumEth();
$usd = $ethFun->getCurrentPrice($currency='USD');
$eur = $ethFun->getCurrentPrice($currency='EUR');
$priceUSD = $sumEth * $usd;
$priceEUR = $sumEth * $eur;
echo $sumEth." ETH";
echo "<br>";
echo $priceUSD." USD";
echo "<br>";
echo $priceEUR." EUR";
?>
