<?php

header("Content-Type:application/json");
header("Access-Control-Allow-Method:DELETE");

include("../../config/config.php");

$res=array();
$config=new Config();

if($_SERVER['REQUEST_METHOD']=="POST"){


    $id=$_POST['id'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $course=$_POST['course'];
    
    $record = $config->getSingleStudent($id);

  
    if(mysqli_num_rows($record)){

        $result=$config->updateStudentData($id,$name,$age,$course);       
        $res['msg']=$result==1?"Updated":"Failed";

    }else{
        http_response_code(403);
        $res['msg']="record not found.";
    }

}
else{

$res['msg']="Only post method is allowed.";

}
print_r(json_encode($res));




?>