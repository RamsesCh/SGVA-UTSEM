<?php
	session_start();
	include('conexionn.php');

$usu 	= $_POST["txtusuario"];
$pass 	= $_POST["txtpassword"];




$queryusuario = mysqli_query($conn,"SELECT * FROM personal WHERE Correo ='$usu' and Contraseña = '$pass'");
$nr 		= mysqli_fetch_array($queryusuario);  
	
if ($nr != NULL)  
	{ 
		if($usu=="Usuario")
			{	
				$_SESSION['Id'] = $nr['Id'];
				header("Location: pagina_usuario.php");
			}
		else if ($usu=="Administrador")
			{
				
				header("Location: pagina_admin.html");
			}
	}
else
	{
	echo "<script> alert('Usuario, contraseña o rol incorrecto.');window.location= 'index.html' </script>";
	}

?>
