<?php
class BtcFun
{
  function getBTCBalance($addr)
  {
      return file_get_contents('https://blockchain.info/de/q/addressbalance/'.$addr.'?confirmations=3');
  }

  function satoshi2btc($satoshi)
  {
      return bcdiv($satoshi,100000000,8);
  }
  
}
?>
