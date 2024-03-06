<?php

header("Content-Type:application/json");

$a = array();

$a = [

    'id' => 101,
    'name' => 'kinjal',
    'marks' =>  96.32,
];

// array_push($a,'Male');
// array_push($a,'GSEB');


$a['gender']="Male";

// unset($a['marks']); 



echo json_encode($a);

?>
