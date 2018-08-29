<?php

include ("eth.php");
//require 'libs/ethereum-php/ethereum.php';
// create a new object
$eth = new Ethereum('127.0.0.1', 8545);
// do your thing


$addr = "0x4E81103607839B3895AEEeb2EA5899a8De1C1F5d";


   $count = $ethFun->countAccounts();
   $allaccounts = $eth->eth_accounts();
   $array;
     for ($i=0; $i < $count; $i++) {
       $address = $allaccounts[$i];
       $balance = $ethFun->getBalanceOfAddress($address);
       $array[$i] = $balance["balance"];
     }
     $encArray = json_encode($array);
     echo   $encArray;



?>
