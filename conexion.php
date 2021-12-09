<?php
	$mysqli=new mysqli("localhost","root","password","sgvanew");
	if($mysqli->connect_errno){
		echo "Fallo al conectar:(".$mysqli->connect_errno.")".$mysqli
			->connect_errno;
	}

?>