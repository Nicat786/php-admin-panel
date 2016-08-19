<?php
 	session_start();
 	if(!$_SESSION['login']==true){
 		header('Location:index.php');
 	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>admin panele xosh gelmisiz</h1>
	<a href="logout.php">Cixis</a>
	<a href="index.php">Esas seyfe</a>

	
</body>
</html>









