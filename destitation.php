<?php
	include "publics.php";
 
	$username   = $_REQUEST['username'];
	$password = $_REQUEST['password'];
 
	 if( $username=="admin" && $password=="123456")
			echo "successfully " ;
	 else
		 echo "failed" ;
	 
	 
?>