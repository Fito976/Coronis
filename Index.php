<!DOCTYPE html>
<html>
<head>
	<title>Incio</title>
	<meta charset="utf-8">
	<!--Aqui esta el CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="css/cont.css"> 
	
</head>
<body>
	<!--contenedor del menu -->
	<nav class="navbar navbar-inverse">
  	
	  	<div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">Coronis</a>
		    </div>
		    <ul class="nav navbar-nav navbar-top ">
		      <li class="active"><a href="#">Inicio</a></li>
		      <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Departamentos
		        <span class="caret"></span></a>
		        <ul class="dropdown-menu">
		        	<li><b href="#">Zona Oriental</b></li>
		          <li><a 	href="#">San Miguel</a></li>
		          <li><a href="#">La Unión</a></li>
		          <li><a href="#">Morazan</a></li>
		          <li><a href="#">Usulutan</a></li>
		        </ul>
		      </li>
		      <li><a href="#">Enfermedades</a></li>
		      <li><a href="#">Registro de pacientes</a></li>
		      <li><a href="#">Estadisticas</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Usuario X</a></li>
		      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión</a></li>
		    </ul>
	  </div>
	</nav>
	<div class="container">
	    <!-- Jumbotron Header -->
	    <header class="jumbotron my-4">
			<h1 class="display-3">Covid-19</h1>
		    <p class="lead" style="text-align: justify;">El COVID-19 es la enfermedad infecciosa causada por el coronavirus que se ha descubierto más recientemente. Tanto el nuevo virus como la enfermedad eran desconocidos antes de que estallara el brote en Wuhan (China) en diciembre de 2019.</p>
		    <a href="#" class="btn btn-danger btn-lg">leer mas</a>
	  	</header>
	</div>
	
	<div class="wraper">
	 <div class="row text-center">
      <div class="col-lg-11 col-md-11 mb-11">
        <div class="card h-50">
          <img class="card-img-top" style="background-image: url('img/dengue1.jpg'); border: 4px;">
          <div class="card-body">
            <h4 class="card-title" style="text-align: justify;"><b>Dengue</b></h4>
            <p class="card-text" style="text-align: justify;">Actualmente, es una enfermedad que esta atacando al 20% de la población nacional.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-danger">Leer mas</a>
          </div>
        </div>
      </div>
       <div class="col-lg-11 col-md-11 mb-11">
        <div class="card h-50">
          <img class="card-img-top" style="background-image: url('img/zika1.jpg');">
          <div class="card-body">
            <h4 class="card-title" style="text-align: justify;"><b>Zika</b></h4>
            <p class="card-text" style="text-align: justify;">Actualmente, es una enfermedad que esta atacando al 5% de la población nacional.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-danger">Leer mas</a>
          </div>
        </div>
      </div>
  </div>
  </div>  

</body>
</html>
