<?php

require_once 'core/core.php';
if (empty($_REQUEST['c'])) {

	$controller='Index';
	require_once ('controllers/'.$controller.'Controller.php');
	$controller=$controller.'Controller';
	$controller = new $controller();
	$controller->Index();
}

else {
    $controller= $_REQUEST['c'];
    require_once ('controllers/'.$controller.'Controller.php');
    $controller=$controller.'Controller';
    $controller= new $controller();
    $metodo= isset($_REQUEST['m']) ?  $_REQUEST['m'] : 'Index';
    call_user_func(array($controller,$metodo));
	
}
?>