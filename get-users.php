<?php
$callback = isset($_GET['jsonp_callback'])?$_GET['jsonp_callback']:'';
$users = [
	['name'=>'tom','role'=>'admin'],
	['name'=>'jerry','role'=>'user']
];
if($callback!=''){//jsonp
    echo $callback.'('.json_encode($users).')';
}else{
    echo json_encode($users);
}





