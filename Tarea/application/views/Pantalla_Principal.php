<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Mostrar_Personas</title>
		<meta name="description" content="">
		<meta name="author" content="Administrator">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

        <link rel="stylesheet" href="http://localhost/clase_02/libs/bootstrap\css\bootstrap.min.css">
       
	    
	     <!-- Archivo personalizados -->
         <style>
         	#customers {
				    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
				    border-collapse: collapse;
				    width: 70%;
				}
				
				#customers td, #customers th {
				    border: 1px solid #ddd;
				    padding: 8px;
				}
				
				#customers tr:nth-child(even){background-color: #f2f2f2;}
				#customers tr:nth-child(odd){background-color: #f2f2f2;}
				
				#customers tr:hover {background-color: #ddd;}
				
				#customers th{
				    padding-top: 12px;
				    padding-bottom: 12px;
				    text-align: center;
				    background-color: #4CAF50;
				    color: white;
				    
				    /*Esto es el equivalente de Pie_1.css*/
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
				  }
         </style>
	</head>

	<body onload="camilo()">
		<div class="container-fluid">
			
			 <div class="row" style="text-align: center">
			 	<h2>Lista de Personas</h2> 
			 </div>
			
			<div class="row" style="overflow-x:auto;padding-left: 15px;padding-right: 15px;">
               
              <table id="customers" style="white-space:nowrap;margin: auto;">
                <thead>
                	<tr>
	                	<th>Id</th>
	                	<th>Nombre</th>
	                	<th>Telefono</th>
                	</tr>
                </thead>
                <tfoot>
                	<tr>
	                	<td colspan="3" style="text-align: center;background: #4caf50;color: white;">Fin de tabla</td>
                	</tr>
                </tfoot>
                
                <?php if(!empty($persona)): 
                      
                        foreach ($persona as $persona) :
							
				?>
                <tbody>
                	<tr>
	                	<td><?php echo $persona['Id'] ?></td>
	                	<td><?php echo $persona['Persona'] ?></td>
	                	<td><?php echo $persona['Telefono'] ?></td>
                	</tr>
                </tbody>
                
               <?php 
                        endforeach; 
                        
                        endif; 
               ?>
               
               </table>
               </div>
               
              <div class="row" style="text-align: center;margin-top: 20px;">
                 <div style="display: inline-block;border-right-width: 20px;margin-bottom: 20px;">
	              	<button class="btn btn-default" style="width: 250px;background-color: white;"><a href="<?php echo site_url('/adicionar');?>">Adicionar Registro</a></button>
	             </div>
	              	<div style="display: inline-block;border-right-width: 20px;margin-bottom: 20px;">
	              	<button class="btn btn-default" style="width: 250px;background-color: white;"><a id="id_id" href="<?php echo site_url('/editar/');?>">Actualizar Registro</a></button>
	             </div>
	             <div style="display: inline-block;border-right-width: 20px;margin-bottom: 20px;">
	              	<button class="btn btn-default" style="width: 250px;background-color: white;"><a id="id2" href="<?php echo site_url('/borrar/');?>">Eliminar Registro</a></button>
	             </div>
              	 
              </div>
              	 
              	 <div class="row" id="Linea_inferior">
	              <p id="Datos_autor">&copy; Copyright  by Camilo SAC</p>
              </div> 
              	 
              </div> 
              <script >
              	
              	var id_usuario=document.querySelector("#id_id").href;
              	var id_usuario2=document.querySelector("#id2").href;
              	
              	function camilo(){
              	   var x = document.querySelectorAll("#customers > tbody tr");
              	   //alert(x.length);
              	   for (i = 0; i < x.length; i++){ 
              	       x[i].addEventListener("click",displayId);
              	    }
              }
              		function displayId()
              		{
              			
              			var x = document.querySelectorAll("#customers > tbody tr");
              			 for (i = 0; i < x.length; i++){ 
              	            x[i].style.backgroundColor="#f2f2f2";
              	        }
              	        document.querySelectorAll("#customers").borderCollapse="collapse";
              			 this.style.backgroundColor = "red";
              			var nodelist = this.querySelector("td").innerHTML;
              			console.log(nodelist);
              			var z = id_usuario + nodelist;
              			var v = id_usuario2 +nodelist;
              			document.querySelector("#id_id").href = z;
              			document.querySelector("#id2").href= v;
              	    }
              	
              </script>

	</body>
</html>
