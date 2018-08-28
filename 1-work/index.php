<?php
   include ("eth.php");
   $addr = "0x4E81103607839B3895AEEeb2EA5899a8De1C1F5d";
    $data =  $ethFun -> getBalanceOfAddress($addr);
       echo $data['balance'];
       //echo $data['pending'];     //Prints John



      $rr =  $ethFun->genPair();
      echo $rr;
?>
