<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title><?php echo "$titulo"; ?>_Personas</title>
		<meta name="description" content="">
		<meta name="author" content="Administrator">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="http://localhost/libs/bootstrap\css\bootstrap.min.css">
        	
	     <!-- Archivo personalizados -->
         <style>
				 #Linea_inferior{
				    position: fixed;/*Fija la posicion respecto del viewport osea de la pagina web*/
				  	bottom: 0%;
				  	/*left: 0%;*/
				  	width: 100%;
				  	font-size: 85%;
				  	background-color: #98ADC8;	
				  	color: #FFF;
				    text-align: center;
				    }
				  #Datos_autor{
				    margin-bottom: 0px;
				    }
         </style>
	</head>

	<body>
		<div class="container-fluid">
			
			 <div class="row" style="text-align: center">
			 	<h2><?php echo "$titulo"; ?> de Personas</h2> 
			 </div>
			
			<form action="" class="form" method="post">
              <div class="row" style="width: 300px;margin: auto;text-align: center;">
                  <label>Nombre:</label>
                  <input type="text" class="form-control" placeholder="Ingrese nombre" name="nombre" required="required" value="<?php echo $retVal = (!empty($persona['Persona'])) ? $persona['Persona'] : '' ; ?>">
               </div>
                            
               <div class="row" style="width: 300px;margin: auto;text-align: center;margin-top: 25px;">
                  <label>Telefono:</label>
                  <input type="text" class="form-control" placeholder="Ingrese telefono" name="telefono" required="required" value="<?php echo $retVal = (!empty($persona['Telefono'])) ? $persona['Telefono'] : '' ; ?>">
               </div>
               
               <div class="row" style="width: 300px;margin: auto;text-align: center;margin-top: 25px;">
               	 <input type="submit" class="form-control" name="submit_adicionar"/>
               </div>
               
            </form>
              	 <div class="row" id="Linea_inferior">
	              <p id="Datos_autor">&copy; Copyright  by Tasami SAC</p>
              </div> 
              	 
              </div> 

	</body>
</html>
