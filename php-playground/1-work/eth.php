<?php
define('RPC_IP','127.0.0.1');
define('RPC_PORT',8545);
require 'libs/ethereum-php/ethereum.php';
$ethFun = new EthFun();
$i =0;

class EthFun
{
    private $eth;
    // let's establish a connection to the parity node
    function __construct()
    {
        $this->eth = new Ethereum(RPC_IP, RPC_PORT);
        if(!$this->eth->net_version()) die('RPC ERROR');
    }
    /*
    * Let's get the balance of an address
    * The balance from parity comes in hex ans is in wei
    * So we convert it using the bc math functions
    */
    function getBalanceOfAddress($addr)
    {
        $eth_hex = $this->eth->eth_getBalance($addr, 'latest');
        $eth = $this->wei2eth($this->bchexdec($eth_hex));
        $pending_hex = $this->eth->eth_getBalance($addr, 'pending');
        $pending = $this->wei2eth($this->bchexdec($pending_hex));
        return array('balance'=>$eth,'pending'=>$pending);
    }

    function getBalanceInWei($addr)
    {
        $eth_hex = $this->eth->eth_getBalance($addr, 'latest');
        $wei = $this->bchexdec($eth_hex);
        $pending_hex = $this->eth->eth_getBalance($addr, 'pending');
        $weiPending = $this->bchexdec($pending_hex);
        return array('balance'=>$wei,'pending'=>$weiPending);
    }

    function getCurrentPrice($currency='USD')
    {
        $data = json_decode(file_get_contents('https://api.coinbase.com/v2/prices/ETH-'.$currency.'/spot'),true);
        return $data['data']['amount'];
    }
    /*
    * We'll use vanityeth for pair generation
    * npm install -g vanity-eth
    * We have to reformat the output string to be usable as JSON
    */
    function genPair()
    {
        exec('vanityeth', $outputAndErrors, $return_value);
        $answer = implode(NULL,$outputAndErrors);
        $answer = str_replace('address:','"address":',$answer);
        $answer = str_replace('privKey:','"privKey":',$answer);
        $answer = str_replace('\'','"',$answer);
        json_decode($answer,true);
    }
    /*
    * The following functions are for conversion
    * and for handling big numbers
    */
    function wei2eth($wei)
    {
        return bcdiv($wei,1000000000000000000,18);
    }
    function bchexdec($hex) {
        if(strlen($hex) == 1) {
            return hexdec($hex);
        } else {
            $remain = substr($hex, 0, -1);
            $last = substr($hex, -1);
            return bcadd(bcmul(16, $this->bchexdec($remain)), hexdec($last));
        }
    }
}
