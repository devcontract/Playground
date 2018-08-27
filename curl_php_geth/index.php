<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<span>test</span>
    <span><?php $output ?></span>

    <?php
        $url = "http://localhost:8545";

            $data = array(
                    "jsonrpc" => "2.0",
                    "method" => "eth_getBalance",
                    "params" => array("0xD35B91cf2cf8335c202a88d0e090b91823fcA7DD" , "latest" ),
                    "id" => "1"
            );

            $json_encoded_data = json_encode($data);

            var_dump($json_encoded_data);

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

            echo $parsed;

    ?>

  </body>
</html>
