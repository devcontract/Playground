<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
    div{
      display: inline;
    }
  </style>
  <body>
  <?php
        $url = "http://localhost:8545";

            $data = array(
                    "jsonrpc" => "2.0",
                    "method" => "eth_getBalance",
                    "params" => array("0xD35B91cf2cf8335c202a88d0e090b91823fcA7DD" , "latest" ),
                    "id" => "1"
            );

            $json_encoded_data = json_encode($data);

          //  var_dump($json_encoded_data);   // displays $data on the page

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json_encoded_data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($json_encoded_data))
            );

            $result = json_decode(curl_exec($ch));
            curl_close($ch);

            $parsed = $result->result;
?>
<div class="">
  Your balance in Hex <br>
    <input style="" class="" value="<?php echo $parsed ?>"><br>
  Your balance in Dec (Wei) <br>
  <input style="" class="" value=""><br>
  Your balance in Ether <br>
  <input style="" class="" value=""><br>
</div>


</ipnut>
  </body>
</html>
