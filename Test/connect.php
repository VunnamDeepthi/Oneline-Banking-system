<?php

$server_nm="DESKTOP-PRFBHLT"; 

$connection = array( "Database"=>"dbms"); 
$conn = sqlsrv_connect( $server_nm, $connection);

if($conn){

	echo "Connection established!";

}else{
	echo "Connection could not be established"; 
	die( print_r( sqlsrv_errors(), true));
}
