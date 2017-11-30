<?php 
//添加一个cors响应头
header('Access-Control-Allow-Origin:http://localhost:63342');
header('Access-Control-Allow-Headers:Content-Type');
header('Access-Control-Allow-Methods','POST,GET');

$users = [
	['name'=>'tom','role'=>'admin'],
	['name'=>'jerry','role'=>'user']
];

$user = json_decode(file_get_contents('php://input'),true);
array_push($users,$user);



echo json_encode($users);






 ?>