<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<body>
	<?php if(!empty($mensajes))
	          {
		          foreach($mensajes as $mensaje)
		          {
		             echo "El id es:".$mensaje['Id']." y el telefono es :".$mensaje['Telefono']."</br>";
	              } 
			  }
           else
		   	  {
		   	  	echo "no hay datos";
		   	  }
	              ?>
</body>
</html>
