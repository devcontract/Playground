
  <?php
  $addressField=0;

$localtime = localtime(time(), true);
echo json_encode($localtime);
  if($_POST['name'] == 'BTC') {
      $addressField = "creating wallet address...";
  }
   function showEthArr(){
     if($addressField == "0"){
        if($addressField != "creating wallet address..."){
          $addressField = "creating wallet address...";
        }
     }
   }

   function showBtcArr(){
     if($addressField == "0"){
        if($addressField != "creating wallet address..."){
          $addressField = "creating wallet address...";
        }
     }


   }
  ?>
