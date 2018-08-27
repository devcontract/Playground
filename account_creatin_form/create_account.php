

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .form{
        width: 400px;
        height: 100px;
        margin: 0 auto;
        border: 1px solid black;
        margin-top: 50px;
      }
      input{
        text-align: center;
      }
      .input{
        display:flex;
     align-items: center;
     justify-content: center;
      }
      span{
        font-size: 15px;
      }
      button{
  }
  </style>
   </head>

  <body>
    <?php
        $url = "http://localhost:8545";
        $data = array(
                "jsonrpc" => "2.0",
                "method" => "personal_newAccount",
                "params" => [$_POST["password"]],
                "id" => "1"
        );

        $json_encoded_data = json_encode($data);

       //var_dump($json_encoded_data);   // displays $data on the page

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
  <div class="form">


      <div class="input">
<span>Please save your new account number:</span><br><br>
  </div>
    <div class="input">

      <input type="text" name="" value="<?php echo $parsed ?>" size="40">
    </div>
  </div>


  </body>
</html>
