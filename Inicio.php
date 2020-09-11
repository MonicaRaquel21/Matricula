<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>

	<style>
		body{
			background-color:  #33adff;
			font-family: Arial;
		}
		#main-container{
			padding-top: 200px;
			text-align: center;
		}

		.btn{
			border-radius: 3px;
			display: inline-block;
			padding: 20px 15px;
			text-decoration: none;
			text-shadow: 0 1px 0 rgba(255,255,255,0.3);
			box-shadow: 0 1px 1px rgba(0,0,0,0.3); 
		}

		.btn-green{
			color: white;
			background-color: #3CC93F;
		}
		.btn-green:hover{
			background-color: #37B839;	
		}
		.btn-green:active{
			background-color: #29962A;
		}

		.btn-red{
			color: white;
			background-color: navy;
		}
		.btn-red:hover{
			background-color: #C43535;	
		}
		.btn-red:active{
			background-color: #A62828;
		}


	</style>
</head>
<body>

	<div id="main-container">
		<a href="Registro.php" class="btn btn-green">Iniciar Proceso de Matricula</a>
		<a href="instrucciones.html" class="btn btn-red">Instrucciones</a>
	</div>
	
</body>
</html>
