<?php

//for specify json data
header("Content-Type:application/json");


//only for post method
header("Access-Control-Allow-Method:POST");

include("../../config/config.php");

$res=array();
$config=new Config();

if($_SERVER['REQUEST_METHOD']=="POST"){

    $name=$_POST['name'];
    $age=$_POST['age'];
    $course=$_POST['course'];

   $result= $config->insertData($name,$age,$course);

   $res['msg']=$result==1?"Inserted":"Failed";
}
else{
    $res['msg']='Only Post method is allowed';
}

echo json_encode($res);

?>