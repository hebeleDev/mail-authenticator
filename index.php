<?php 

require __DIR__ . "/function.php";

$auth = new auth\mailAuthenticator;

if ($auth->mailauth("foo@gmail.com")):	
	echo "true";
else:
	echo "false";
endif;

?>
