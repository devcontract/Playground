<?php
    $url = "http://localhost:8545";
    $data = array(
            "jsonrpc" => "2.0",
            "method" => "eth_accounts",
            "params" => [],
            "id" => "1"
    );
    //url -H "Content-type: application/json" -X POST --data '{"jsonrpc":"2.0","method":"eth_accounts","params":[],"id":1}' http://localhost:8545


    $json_encoded_data = json_encode($data);
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

    print_r ($parsed[0]);


  //  echo $parsed
  //  echo implode("", $parsed);
?>
