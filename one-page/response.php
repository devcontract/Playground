
  <?php
  if (is_ajax()) {
    if (isset($_POST["action"]) && !empty($_POST["action"])) { //Checks if action value exists
      $action = $_POST["action"];
      switch($action) { //Switch case for value of action
        case "test": test_function(); break;
      }
    }
  }
  //Function to check if the request is an AJAX request
  function is_ajax() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
  }
  function test_function(){
    $return = $_POST;

    //Do what you need to do with the info. The following are some examples.
    //if ($return["favorite_beverage"] == ""){
    //  $return["favorite_beverage"] = "Coke";
    //}
    //$return["favorite_restaurant"] = "McDonald's";

    $return["json"] = json_encode($return);
    echo json_encode($return);
  }
  ?>













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
