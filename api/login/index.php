<?php

//for specify json data
header("Content-Type:application/json");


//only for post method
header("Access-Control-Allow-Method:POST");

include("../../config/config.php");

$res=array();
$config=new Config();

if($_SERVER['REQUEST_METHOD']=="POST"){

    $user_name=$_POST['user_name'];
    $password=$_POST['password'];

   $result= $config->insertData($user_name,$password);

   $res['msg']=$result==1?"Login Successfully":"Failed";
   http_response_code($result==1?200:403);
}
else{
    $res['msg']='Only Post method is allowed';
}

echo json_encode($res);

?>