<?php

include ("eth.php");
//require 'libs/ethereum-php/ethereum.php';
// create a new object
$eth = new Ethereum('127.0.0.1', 8545);
// do your thing


$addr = "0x4E81103607839B3895AEEeb2EA5899a8De1C1F5d";

$accounts = $eth->eth_accounts();
$encoded_accounts =serialize($accounts); //json_encode($accounts);
echo count($accounts);
echo $accounts[2];

           //$eth-> genPair()
          //   echo $account , PHP_EOL;
          // }


?>
