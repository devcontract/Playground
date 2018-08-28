<?php
   include ("eth.php");
   $addr = "0x04fd38b8c739890c19cd12687a14411e584b9311";
    $data =  $ethFun -> getBalanceOfAddress($addr);
       echo $data['balance'];
       //echo $data['pending'];     //Prints John



      $rr =  $ethFun -> genPair();
      echo $rr;
?>
