<?php 

require __DIR__ . "/function.php";

$auth = new auth\mailAuthenticator;

if ($auth->mailauth("foo@gmail.com") == true):	
	echo "true";
else:
	echo "false";
endif;

?>