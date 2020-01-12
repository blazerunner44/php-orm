<?php
function connect(){
	return mysqli_connect(
		'localhost', //Database server
		'database_user', //Database user
		'database_pass', //Database password
		'database_name' //Database name
	);
}
?>